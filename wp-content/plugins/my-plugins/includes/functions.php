<?php
/* = Добавляем свои элементы в профиль пользователя
----------------------------------------- */

// Выбор пола пользователей
add_action( 'show_user_profile', 'show_extra_profile_fields' );
add_action( 'edit_user_profile', 'show_extra_profile_fields' );

function show_extra_profile_fields( $user ) {
    ?>
    <h3>Дополнительная информация</h3>
    <table class="form-table">
        <tr>
            <th>
                <label for="gender">Выберете пол</label>
            </th>
            <td>
                <select name="gender" id="gender">
                    <option value="Мужской" <?php selected( 'Мужской', get_the_author_meta( 'gender', $user->ID ) ); ?>>Мужской</option>
                    <option value="Женский" <?php selected( 'Женский', get_the_author_meta( 'gender', $user->ID ) ); ?>>Женский</option>
                </select>
            </td>
        </tr>
    </table>
    <?php
}

add_action( 'personal_options_update', 'save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_profile_fields' );

function save_extra_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;
    update_usermeta( $user_id, 'gender', $_POST[ 'gender' ] );
}









function wpb_recently_registered_users() {
global $wpdb;
 
$recentusers = '<ul class="recently-user">';
 
$usernames = $wpdb->get_results("SELECT user_nicename, user_url, user_email FROM $wpdb->users ORDER BY ID DESC LIMIT 10");
 
foreach ($usernames as $username) {
if (!$username->user_url) :
$recentusers .= '<li>' .get_avatar($username->user_email, 45) . $username->user_nicename . "</a></li>";
else :
$recentusers .= '<li>' .get_avatar($username->user_email, 45) . '<a href="'. $username->user_url . '"> ' .$username->user_nicename."</a></li>";
endif;
}
$recentusers .= '</ul>';
 
return $recentusers;
}


add_shortcode('wpb_newusers', 'wpb_recently_registered_users');