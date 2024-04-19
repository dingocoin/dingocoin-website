<div class="alert alert-info text-center" role="alert">
    <?php
    // Set the message variable
    $selectedMessage = 'custom_alert';

    // Display different messages based on the selected value
    switch ($selectedMessage) {
        case 'trailmap_soon':
            // Countdown Clock
            // Set the target date and time
            $target_date = "2023-03-15 23:59:59";

            // Get the current date and time
            $current_date = date('Y-m-d H:i:s');
            
            // Calculate the difference between the target date and the current date
            $diff = strtotime($target_date) - strtotime($current_date);
            
            // Calculate the remaining days, hours, minutes, and seconds
            $days = floor($diff / (60 * 60 * 24));
            $hours = floor(($diff % (60 * 60 * 24)) / (60 * 60));
            $minutes = floor(($diff % (60 * 60)) / 60);
            
            // Display the countdown clock
            
            // Countdown Alert Message
            echo "New Trailmap Update Coming Soon! Time remaining: " . $days . " days, " . $hours . " hours, " . $minutes . " minutes, ";                          
            break;    

        case 'trailmap_now':
            echo "New Trailmap Update Live Now";
            break;

        case 'new_section':
            echo "New Section Now Open! See Our New Trailmap Flip Section";
            break;
            
        case 'custom_alert':
            echo "Updated White Paper Now Available Under Resources";
            break;        

        default:
            echo "Welcome To Dingocoin. Much King Dingo Such Wild Doge";
        break; 
    }
    ?>
</div>
