<?php
// 添加Incentive管理菜单
function incentive_admin_menu()
{
    add_menu_page(
        'Incentive Manager',
        'Incentive Manager',
        'manage_options',
        'incentive-manager',
        'incentive_manager_page',
        'dashicons-editor-help',
        20
    );
}

add_action('admin_menu', 'incentive_admin_menu');

// Incentive管理页面
function incentive_manager_page()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'incentive';

    if (isset($_POST['insert'])) {
        $question = sanitize_text_field($_POST['question']);
        $title = sanitize_text_field($_POST['title']);
        $lable = sanitize_text_field($_POST['lable']);
        // 使用wp_kses_post()来处理HTML内容
        $answer = wp_kses_post($_POST['answer']);
        $wpdb->insert($table_name, ['question' => $question, 'title' => $title, 'lable' => $lable, 'answer' => $answer]);
    }

    if (isset($_POST['update'])) {
        $id = intval($_POST['id']);
        $question = sanitize_text_field($_POST['question']);
        $title = sanitize_text_field($_POST['title']);
        $lable = sanitize_text_field($_POST['lable']);
        // 使用wp_kses_post()来处理HTML内容
        $answer = wp_kses_post($_POST['answer']);
        $wpdb->update($table_name, ['question' => $question, 'title' => $title, 'lable' => $lable, 'answer' => $answer], ['id' => $id]);
    }

    if (isset($_POST['delete'])) {
        $id = intval($_POST['id']);
        $wpdb->delete($table_name, ['id' => $id]);
    }

    $incentives = $wpdb->get_results("SELECT * FROM $table_name");
?>
    <div class="wrap incentive-manager">
        <h1>Incentive Manager</h1>
        <!-- 添加incentive内容的form -->
        <form method="post">
            <h2>Add New Incentive</h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Question</th>
                    <td><input type="text" name="question" class="regular-text" required></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Title</th>
                    <td><input type="text" name="title" class="regular-text"></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Lable</th>
                    <td><input type="text" name="lable" class="regular-text" required></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Answer</th>
                    <td><textarea name="answer" class="large-text" rows="5" required></textarea></td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="insert" class="button-primary" value="Add Incentive">
            </p>
        </form>
        <hr>
        <h2>Existing Incentives</h2>
        <!-- 查询展示incentive页面内容的地方 -->
        <table class="widefat">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Title</th>
                    <th>Lable</th>
                    <th>Answer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($incentives as $incentive) : ?>
                    <tr>
                        <form method="post">
                            <td><?php echo $incentive->id; ?></td>
                            <td><input type="text" name="question" value="<?php echo esc_attr($incentive->question); ?>" class="regular-text"></td>
                            <td><input type="text" name="title" value="<?php echo esc_attr($incentive->title); ?>" class="regular-text"></td>
                            <td><input type="text" name="lable" value="<?php echo esc_attr($incentive->lable); ?>" class="regular-text"></td>
                            <td><textarea name="answer" class="large-text" rows="2"><?php echo esc_textarea($incentive->answer); ?></textarea></td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $incentive->id; ?>">
                                <input type="submit" name="update" class="button" value="Update">
                                <input type="submit" name="delete" class="button button-danger" value="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                            </td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php
}

// Incentive管理页面样式
function incentive_admin_styles()
{
    echo '<style>
        .incentive-manager .widefat th, .incentive-manager .widefat td {
            vertical-align: middle;
        }
        .incentive-manager .button-danger {
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

add_action('admin_head', 'incentive_admin_styles');
