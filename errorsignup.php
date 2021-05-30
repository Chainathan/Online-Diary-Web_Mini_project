<?php
    // echo "Wrong Username or password, Please try again!"
?>
<style>
      /* Basics */
      body {
        width: 100%;
        height: 100%;
        font-family: "Helvetica Neue", Helvetica, sans-serif;
        color: #444;
        -webkit-font-smoothing: antialiased;

        background-image: url("pic3.jpg");
        background-repeat: no-repeat;
        background-size: 100%, 100%;
      }
      .header {
        padding: 20px;
        text-align: center;

        color: white;
      }
      .button {
        background-color: #f44336;
        border: none;
        color: white;

        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
      }
</style>
<body>
    <div align="center">
        <h1 class="header">User already exists or invalid details, Please try again!</h1>
        <button class="button" onclick="window.location.href='signup.html';">
            Try Again
        </button>
    </div>
</body>