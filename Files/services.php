<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="services.css">
    <title>Cloud Computing - Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('c.jpg');
            background-repeat: repeat;
            background-position: center;
            background-size: cover;
        }
        section {
            margin: 20px;
        
    
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
        <h1>Services</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
    </nav>
    <section>
        <h2>Cloud computing services</h2>
        <p>IaaS (Infrastructure-as-a-Service), PaaS (Platform-as-a-Service) and SaaS (Software-as-a-Service) are the three most common models of cloud services, and it’s not uncommon for an organization to use all three.</p>
        <section>
        <div class="content">
            <div class="content-item">
        <h2>SaaS (Software-as-a-Service)</h2>
        <p>SaaS—also known as cloud-based software or cloud applications—is application software that’s hosted in the cloud, and that users access via a web browser, a dedicated desktop client, or an API that integrates with a desktop or mobile operating system. In most cases, SaaS users pay a monthly or annual subscription fee; some may offer ‘pay-as-you-go’ pricing based on your actual usage.

In addition to the cost savings, time-to-value, and scalability benefits of cloud, SaaS offers the following:

Automatic upgrades: With SaaS, users take advantage of new features as soon as the provider adds them, without having to orchestrate an on-premises upgrade.

Protection from data loss: Because SaaS stores application data in the cloud with the application, users don’t lose data if their device crashes or breaks.
SaaS is the primary delivery model for most commercial software today—there are hundreds of thousands of SaaS solutions available, from the most focused industry and departmental applications, to powerful enterprise software database and AI (artificial intelligence) software.</p></div>
        <div class="content">
            <div class="content-item">
                <h3>PaaS (Platform-as-a-Service)</h3>
                <p>PaaS provides software developers with on-demand platform—hardware, complete software stack, infrastructure, and even development tools—for running, developing, and managing applications without the cost, complexity, and inflexibility of maintaining that platform on-premises.

With PaaS, the cloud provider hosts everything—servers, networks, storage, operating system software, middleware, databases—at their data center. Developers simply pick from a menu to ‘spin up’ servers and environments they need to run, build, test, deploy, maintain, update, and scale applications.

Today, PaaS is often built around containers, a virtualized compute model one step removed from virtual servers. Containers virtualize the operating system, enabling developers to package the application with only the operating system services it needs to run on any platform, without modification and without need for middleware.

Red Hat OpenShift is a popular PaaS built around Docker containers and Kubernetes, an open source container orchestration solution that automates deployment, scaling, load balancing, and more for container-based applications.</p>
            </div>
            <div class="content-item">
                <h3>IaaS (Infrastructure-as-a-Service)</h3>
                <p>IaaS provides on-demand access to fundamental computing resources—physical and virtual servers, networking, and storage—over the internet on a pay-as-you-go basis. IaaS enables end users to scale and shrink resources on an as-needed basis, reducing the need for high, up-front capital expenditures or unnecessary on-premises or ‘owned’ infrastructure and for overbuying resources to accommodate periodic spikes in usage.  

In contrast to SaaS and PaaS (and even newer PaaS computing models such as containers and serverless), IaaS provides the users with the lowest-level control of computing resources in the cloud.

IaaS was the most popular cloud computing model when it emerged in the early 2010s. While it remains the cloud model for many types of workloads, use of SaaS and PaaS is growing at a much faster rate.</p>
            </div>
            <div class="content-item">
                <h3>Serverless computing </h3>
                <p>Serverless computing (also called simply serverless) is a cloud computing model that offloads all the backend infrastructure management tasks–provisioning, scaling, scheduling, patching—to the cloud provider, freeing developers to focus all their time and effort on the code and business logic specific to their applications.

What's more, serverless runs application code on a per-request basis only and scales the supporting infrastructure up and down automatically in response to the number of requests. With serverless, customers pay only for the resources being used when the application is running—they never pay for idle capacity. 

FaaS, or Function-as-a-Service, is often confused with serverless computing when, in fact, it's a subset of serverless. FaaS allows developers to execute portions of application code (called functions) in response to specific events. Everything besides the code—physical hardware, virtual machine operating system, and web server software management—is provisioned automatically by the cloud service provider in real-time as the code executes and is spun back down once the execution completes. Billing starts when execution starts and stops when execution stops.</p>
            </div>
            
        </div>
    </section>
    </section>
</body>
</html>
