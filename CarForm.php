<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/CarForm.css">
</head>
<body>
<div class="main">
 
 <h1 id="title">CAR BOOKING FORM</h1>
 <p id="description">
   Fill details below to complete your Booking
 </p>
 
  <div class="main-content">
 <div class="form-content">
   <form id="survey-form">
     <label for="name" id="name-label">Name</label>
     <input id="name" type="text" required placeholder="Enter your name" />
     <label for="email" id="email-label">Email</label>
      <input id="email" type="email" required placeholder="Enter your email" />
     <label for="number" id="number-label">Age</label>
      <input id="number" type="number"min="18" max="60" required placeholder="Enter your Age" />
     
     <label for="dropdown">Select car model</label>
     <select id="dropdown">
       <option value="BMW 3 serie">BMW 3 series</option>
       <option value="BMW X5">BMW X5</option>
       <option value="BMW X6">BMW X6</option>
       <option value="BMW X7">BMW X7</option>
       <option value="other">Other</option>
     </select>
     
     <fieldset>
       <legend>Model color</legend>
       <input type="radio" name="action" checked id="Black" value="Black" /><label for="Black">Black</label><br />
       <input type="radio" name="action" id="Blue" value="Blue"  /><label for="Blue">Blue</label><br />
       <input type="radio" name="action" id="White" value="not-sure" /><label for="White">White</label><br />
     </fieldset>

       <p>Add Features</p>
       <input type="checkbox" id="Self-driving" name="Self-driving" value="Self-driving">
       <label for="Self-driving">Self-driving</label><br>
       <input type="checkbox" id="Dual-motor" name="Dual-motor" value="Dual-motor">
       <label for="Dual-motor">Dual-motor</label><br>
       <input type="checkbox" id="Performance" name="Performance" value="more-videos">
       <label for="Performance">Performance</label><br>
     
     
     <label for="comment">Any comments or suggestions?</label>
     <textarea rows="4" cols="50" id="comment">Enter your comment here...</textarea>
     
     <button type="submit" id="submit">Submit</button>
   </form>
 </div>
 </div>
</div>

</body>
</html>
