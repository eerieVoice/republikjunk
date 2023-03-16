<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <img class="logo" src="img/logo straight white.svg" alt="logo">
        <nav>
            <ul class="nav__links">
                <li><a class="dashboard" href="./dashboard.php">Dashboard</a></li>
                <li><a class="mrf" href="./mrf.php">MRF</a></li>
                <li><a class="mrf" href="./collection_record.php">Collection Record</a></li>
                <li><a class="mrf" href="./collection_log.php">Collection Log</a></li>
            </ul>
        </nav>
        <button>
            <form id="logoutform" action="util/logout.php" method="POST">
                <a id="logout-link" onclick="myFunction()" class="cta">
                    <div>

                        <span class="text_logout"> Logout</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                    </div>
                </a>
            </form>
        </button>
    </header>
</body>
<script>
    function myFunction() {
        document.getElementById("logoutform").submit();
    }
</script>