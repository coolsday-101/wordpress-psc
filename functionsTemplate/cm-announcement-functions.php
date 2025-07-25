<?php
// 1. Create the admin menu
function announcement_admin_menu()
{
    add_menu_page(
        'Announcement Manager',       // Page title
        'Announcement Manager',       // Menu title
        'manage_options',             // Required capability
        'announcement-manager',       // Menu slug
        'announcement_manager_page',  // Callback to display the page
        'dashicons-megaphone',        // Icon (optional)
        20                            // Position in the menu (optional)
    );
}
add_action('admin_menu', 'announcement_admin_menu');

// 2. Render the Announcement Manager page
function announcement_manager_page()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'announcement'; // e.g., wp_announcement

    // Handle Insert (Add New Announcement)
    if (isset($_POST['insert'])) {
        $announcement = sanitize_text_field($_POST['announcement']);

        // Get the raw textarea input and split by new lines
        $urls_raw   = sanitize_textarea_field($_POST['urls']);
        $urls_array = array_filter(array_map('trim', explode("\n", $urls_raw))); 
        // Convert the array to JSON for storage
        $urls_json  = json_encode($urls_array);

        // Insert into DB
        $wpdb->insert(
            $table_name,
            [
                'announcement' => $announcement,
                'urls'         => $urls_json
            ]
        );
    }

    // Handle Update
    if (isset($_POST['update'])) {
        $id          = intval($_POST['id']);
        $announcement = sanitize_text_field($_POST['announcement']);

        // Same approach for URLs
        $urls_raw   = sanitize_textarea_field($_POST['urls']);
        $urls_array = array_filter(array_map('trim', explode("\n", $urls_raw)));
        $urls_json  = json_encode($urls_array);

        $wpdb->update(
            $table_name,
            [
                'announcement' => $announcement,
                'urls'         => $urls_json
            ],
            ['id' => $id]
        );
    }

    // Handle Delete
    if (isset($_POST['delete'])) {
        $id = intval($_POST['id']);
        $wpdb->delete($table_name, ['id' => $id]);
    }

    // Fetch all existing announcements
    $announcements = $wpdb->get_results("SELECT * FROM $table_name");
    ?>
    <div class="wrap announcement-manager">
        <h1>Announcement Manager</h1>

        <!-- Form: Add New Announcement -->
        <form method="post">
            <h2>Add New Announcement</h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Announcement</th>
                    <td>
                        <input type="text" name="announcement" class="regular-text" required>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">URLs (one per line)</th>
                    <td>
                        <textarea name="urls" class="large-text" rows="5"></textarea>
                    </td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="insert" class="button-primary" value="Add Announcement">
            </p>
        </form>

        <hr>

        <h2>Existing Announcements</h2>
        <table class="widefat">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Announcement</th>
                    <th>URLs</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($announcements as $item): ?>
                <?php
                // Decode JSON into an array
                $urls_array = json_decode($item->urls, true);
                if (!is_array($urls_array)) {
                    $urls_array = [];
                }
                // Prepare textarea content (one URL per line)
                $urls_text = implode("\n", $urls_array);
                ?>
                <tr>
                    <form method="post">
                        <td><?php echo esc_html($item->id); ?></td>
                        <td>
                            <input type="text"
                                   name="announcement"
                                   value="<?php echo esc_attr($item->announcement); ?>"
                                   class="regular-text">
                        </td>
                        <td>
                            <textarea name="urls" class="large-text" rows="3"><?php echo esc_textarea($urls_text); ?></textarea>
                        </td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo esc_attr($item->id); ?>">
                            <input type="submit" name="update" class="button" value="Update">
                            <input type="submit"
                                   name="delete"
                                   class="button button-danger"
                                   value="Delete"
                                   onclick="return confirm('Are you sure you want to delete this item?');">
                        </td>
                    </form>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}

// 3. Optional: Add custom admin styles
function announcement_admin_styles()
{
    echo '<style>
        .announcement-manager .widefat th,
        .announcement-manager .widefat td {
            vertical-align: middle;
        }
        .announcement-manager .button-danger {
            color: #a00;
        }
        .form-table input {
            width: 90%;
        }
        .widefat input {
            width: 100%;
        }
        .widefat .button {
            width: 60%;
        }
    </style>';
}
add_action('admin_head', 'announcement_admin_styles');
