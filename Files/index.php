<!DOCTYPE html>
<html>
<head>
    <title>Cloud Computing - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('c.jpg');
            background-repeat: repeat;
            background-position: top;
            background-size: cover;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            background-image: url('c.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        
        nav {
            background-color: #f4f4f4;
            padding: 10px;
        }
        nav a {
            text-decoration: none;
            padding: 10px;
            color: #333;
        }
        nav a:hover {
            background-color: #333;
            color: #fff;
        }
        section {
            margin: 20px;
        }
        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .search-container input[type="text"] {
            padding: 8px;
            width: 300px;
            border: none;
            border-radius: 4px;
        }
        .search-container button {
            padding: 8px 16px;
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .search-container button:hover {
            background-color: deepskyblue;
        }
        .content-item {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .content-item h3 {
            margin-top: 0;
        }
        .content-item p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Cloud Computing</h1>
        <div class="search-container">
            <input type="text" placeholder="Search">
            <button type="submit">Search</button>
        </div>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
    </nav>
    <section>
        <h2>What is cloud computing?</h2>
        <p>Cloud computing is on-demand access, via the internet, to computing resources—applications, servers (physical servers and virtual servers), data storage, development tools, networking capabilities, and more—hosted at a remote data center managed by a cloud services provider (or CSP). The CSP makes these resources available for a monthly subscription fee or bills them according to usage.Compared to traditional on-premises IT, and depending on the cloud services you select, cloud computing helps do the following:</p>
        <div class="content">
            <div class="content-item">
                <h3>Lower IT costs:</h3>
                <p>Cloud lets you offload some or most of the costs and effort of purchasing, installing, configuring, and managing your own on-premises infrastructure.</p>
            </div>
            <div class="content-item">
                <h3>Improve agility and time-to-value:</h3>
                <p>With cloud, your organization can start using enterprise applications in minutes, instead of waiting weeks or months for IT to respond to a request, purchase and configure supporting hardware, and install software. Cloud also lets you empower certain users—specifically developers and data scientists—to help themselves to software and support infrastructure.</p>
            </div>
            <div class="content-item">
                <h3>Scale more easily and cost-effectively:</h3>
                <p>Cloud provides elasticity—instead of purchasing excess capacity that sits unused during slow periods, you can scale capacity up and down in response to spikes and dips in traffic. You can also take advantage of your cloud providers global network to spread your applications closer to users around the world.</p>
            </div>
            
        </div>
    </section>
</body>
</html>
