<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<title>Daily Food Review Poll</title>
<style>
    /* Inline CSS */
    body {
        font-family: 'Poppins', sans-serif;
        background-image: url('mountain.jpg'); 
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        font-size: 20px;
    }
    .container {
        top: 50px;
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.7);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        align-items: center;
        justify-content: center;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }
    input[type="radio"] {
        margin-right: 10px;
        display: inline-block; 
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    select {
        width: 250px;
        height: 30px;
        border-radius: 5px;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Daily Food Review Poll</h2>
    <form id="foodReviewForm" method="post" action="submit_review.php">
        <label>Select your Hostel:</label>
        <select id="hostel" name="hostel" required>
        <option value="" disabled selected>Select</option>
        <option value="amaravathi">Amaravathi</option>
        <option value="bharathi">Bharathi</option>
        <option value="bhavani">Bhavani</option>
        <option value="dheeran">Dheeran</option>
        <option value="ilango">Ilango</option>
        <option value="kamban">Kamban</option>
        <option value="ponnar">Ponnar</option>
        <option value="sankar">Sankar</option>
        <option value="valluvar">Valluvar</option>
        </select><br><br>
        <label>Rate the food today:</label>
        <input type="radio" id="good" name="poll" value="Good">
        <label for="good">Good</label>
        <input type="radio" id="better" name="poll" value="Better">
        <label for="better">Better</label>
        <input type="radio" id="average" name="poll" value="Average">
        <label for="average">Average</label>
        <input type="radio" id="worst" name="poll" value="Worst">
        <label for="worst">Worst</label>
        <br><br>
        <input type="submit" value="Submit Review">
    </form>
</div>
</body>
</html>
