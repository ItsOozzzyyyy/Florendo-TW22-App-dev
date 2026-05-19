<?php
// Function to display each story
function showStory($title, $image, $text) {
    echo "
    <div class='story-box'>
        <h3>$title</h3>
        <img src='$image' alt='$title'>
        <p>$text</p>
    </div>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PSA4.1</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .story-box {
            width: 18%;
            border: 2px solid black;
            padding: 10px;
            background: #eee;
        }

        img {
            width: 100%;
            height: 120px;
        }
    </style>
</head>
<body>

<h2>My Short Stories</h2>

<div class="container">
<?php
showStory("Story 1", "https://www.shutterstock.com/image-photo/smiling-bearded-man-backpack-sitting-600nw-2613048695.jpg", "Once upon a time, there was a brave adventurer.");

showStory("Story 2", "https://www.birdfact.com/_next/image?url=https%3A%2F%2Fimages.birdfact.com%2Fhow-do-birds-learn-to-fly.jpg&w=3840&q=75", "A small bird learned how to fly high in the sky.");

showStory("Story 3", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfbOXeeD7bDuKeHYR6gTBjpmmrfdB44UfZSg&s", "A boy found a hidden treasure in the forest.");

showStory("Story 4", "https://thumbs.dreamstime.com/b/d-rendering-robot-learning-solving-problems-robot-solving-problems-112443979.jpg", "A robot helped humans solve big problems.");

showStory("Story 5", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSL9e7Mf4-dKjXtj1kz0PMYzuT-SFOMJ7VDw&s", "A magical kingdom existed beyond the mountains.");
?>
</div>

</body>
</html>
