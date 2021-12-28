<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="stylee.css" />
    <title>Expense Tracker</title>
  </head>
  <body>
  
  	    <ul>
			<a href="index.php">Log In</a>
		</ul>
	

		<h2 box-shadow: var(--box-shadow);>Expense Tracker by JASVEER</h2>
	
    <div class="container">
	
      <h4>Your Balance</h4>
      <h1 id="balance">Rs0.00</h1>

      <div class="inc-exp-container">
        <div>
          <h4>Income</h4>
          <p id="money-plus" class="money plus">+RS0.00</p>
        </div>
        <div>
          <h4>Expense</h4>
          <p id="money-minus" class="money minus">-Rs0.00</p>
        </div>
      </div>

      <button class="btn"> History</button>
      <ul id="list" class="list">
        <!-- <li class="minus">
          Cash <span>-$400</span><button class="delete-btn">x</button>
        </li> -->
      </ul>

      <h3>Add new transaction below</h3>
      <form id="form">
        <div class="form-control">
          <input type="text" id="text" placeholder="Enter transaction details..." />
        </div>
		
        <div class="form-control">
          <label for="amount"> Amount <br /> (negative - expense, positive - income)</label>
          <input type="number" id="amount" placeholder="Enter amount..." />
        </div>
		
        <button class="btn">Add transaction</button>
      </form>
    </div>

    <script src="script.js"></script>
  </body>
  
</html>

