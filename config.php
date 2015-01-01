<?php
	if (getenv('MAG-URL') !== false) {
		define("HOST", getenv('MAG-URL')); // Use this with Heroku, etc.
	} else {
		define("HOST", "https://my-mag-url.com/"); // Change this to your MAG-URL (add a slash at the end)
	}
    
    // Enter an informative text for the Description-Meta-Tag
    define("META_DESC", "This is a free Minecraft Achievement Generator with many Icons for your website, forums, blogs, YouTube-Channels and much more!");

    // Please do not edit anything else in this file!
    error_reporting(0);
    define("APPLICATION_NAME", "Minecraft Achievement Generator");
    define("APPLICATION_VERSION", "1.0");
    define("APPLICATION_URL", "https://github.com/MarvinMenzerath/MinecraftAchievementGenerator");
    define("MAX_IMAGES", 39);
?>