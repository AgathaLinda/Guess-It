<?php require('facebook.php');
    $config = array(
         'appId' =?--> 'your facebook app id',
         'secret' => 'your facebook app secret code',
 
        'allowSignedRequest' => false
    );
    $facebook = new Facebook($config);
    $user_id = $facebook->getUser();
    if (isset($user_id)) {
        try {          
            $likes = $facebook->api('/me/likes/your_facebook_page_id_here', 'GET');            
 
            if (!empty($likes['data'])) // if user has liked the page then $likes['data'] wont be empty otherwise it will be empty
            {
                echo 'Thank you for liking our fan page!';         
                // you can write some custom code here to award users some points or some badge        
            }
           else {
                echo 'You have not liked our fan page! Like it now:';
                ?>                  
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Farkhitech&width&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true&appId=1392604484339363" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowtransparency="true"></iframe> //replace this with your own Facebook like box code
                <!--?php }
        } catch (FacebookApiException $e) {
            $login_url = $facebook-?-->getLoginUrl();
            echo '<a href="' . $login_url . '">Please click here to login into your Facebook account.</a>';
            error_log($e->getType());
            error_log($e->getMessage());
        }
    } else {
        $login_url = $facebook->getLoginUrl();
        echo '<a href="' . $login_url . '">Please lick here to login into your Facebook account</a>';
    }
    ?>
- 
