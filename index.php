<?php include 'fetch.php'; ?>
<!doctype html>
<html>
<head>
<title>My Tweets!</title>
</head>

<body>
<h1>My latest Tweet</h1>

<!-- Display first Tweet -->
<?php echo fetchTweet(0); ?>

</body>
</html>
