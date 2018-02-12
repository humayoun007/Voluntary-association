<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dashboard.css">
    <script src="jquery.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <span class="bckg"></span>
    <header>
      <h1>Dashboard</h1>
      <nav>
        <ul>
          <li>
            <a href="javascript:void(0);" data-title="Projects">Projects</a>
          </li>
          <li>
            <a href="javascript:void(0);" data-title="Team">Team</a>
          </li>
          <li>
            <a href="javascript:void(0);" data-title="Diary">Diary</a>
          </li>
          <li>
            <a href="javascript:void(0);" data-title="Timeline">Timeline</a>
          </li>
          <li>
            <a href="javascript:void(0);" data-title="Settings">Settings</a>
          </li>
          <li>
            <a href="javascript:void(0);" data-title="Search">Search</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="title">
        <h2>Projects</h2>
        <a href="javascript:void(0);">Hello <?php session_start(); echo $_SESSION['username']; ?> !</a>        
      </div>
      <p class="logoutSection"><a href="login.php" >Logout</a></p>
      <article class="larg">