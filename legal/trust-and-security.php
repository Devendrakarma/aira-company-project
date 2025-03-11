<html>

<head>
    <?php $pageTitle = 'Trust-Security' ?>
    <?php include './../include/head-link.php' ?>
    <?php include './../include/constant.php' ?>
</head>

<body class="pt-0">
    <!-- Header Component -->
    <?php include './../include/header.php' ?>
    <main class="mainContent">
        <section class="innerBanner innerBanner-sm">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb position-relative">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Legal</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Trust-Security</li>
                        </ol>
                    </nav>
                    <h1 class="mb-0">Trust Security</h1>
                </div>
            </div>
        </section>

        <section class="cmsPages py-80 pb-0">
            <div class="container">
          <h3> Secure your automation journey with AIRA Security:</h3>
           <p> At AIRA, each product is meticulously designed and developed with a focus on security. Our commitment is evident in our development lifecycle, where automated security scans and red team-style penetration tests are conducted on every build. To further bolster confidence, we submit our releases to independent third-party reviews by Veracode, ensuring that our security is not just trusted but certified.</p>

            <h3>Privacy at AIRA:</h3>
          <p>  Privacy is a fundamental aspect of our business. We adhere to the Data Protection Regulation, one of the strictest privacy standards, across all our products. Our commitment to GDPR compliance is reflected in AIRA’s intercompany agreements and our global privacy policy, available here. With a dedicated team focused on privacy compliance, we conduct internal privacy assessments before releasing new products and services.</p>

           <p> For your convenience, AIRA offers both on-premise and cloud software, allowing you to choose the solution that aligns with your privacy compliance needs. Opt for the AIRA RPA Platform fully on your infrastructure, keeping your data within your environment.</p>

         <h3> Compliance:</h3>
           <p> Compliance is a serious commitment at AIRA. We integrate compliance into our processes and encourage our employees and partners to act in accordance with applicable legislation and the AIRA Code of Conduct.
           </p>
          <h3>Data Encryption:</h3>
          <p>  AIRA employs top-tier encryption solutions to secure customer data and communications, utilizing the industry-standard AES-256 encryption algorithm and the Transport Layer Security (TLS) v1.2 protocol.</p>

       <h3> Encryption in Transit: </h3>
          <p>  All interactions with AIRA interface (UI) and APIs are protected by industry-standard HTTPS/TLS protocols, ensuring encryption (TLS 1.2 or higher) across public networks for secure data transmission. For email communications, our product defaults to opportunistic TLS, encrypting and securely delivering emails to prevent eavesdropping between mail servers that support this protocol.
          </p>
        <h3>  User Authentication: </h3>
           <p> Users access AIRA only with a valid username and password combination, which is encrypted via TLS while in transmission. An encrypted session ID cookie is used to uniquely identify each user. For added security, the session key is automatically scrambled and re-established in the background at regular intervals.</p>
       <h3> Application Security:  </h3>
         <p> Our robust application security model prevser sessions. AIRA uses various security tools to verify security best practices throughout the software development lifecycle (SDLC) with agile scrum.</p>

       <h3> Internal Systems Security:</h3>
       <p> Inside of the perimeter firewalls, the systems are safeguarded by network address translation, port redirection, IP masquerading, non-routable IP addressing schemes, and more. The specific details of these features are proprietary.</p>

       <h3> Operating System Security:</h3>
      <p>  AIRA enforces tight operating system-level security by using a minimal number of access points to all production servers. We protect all operating system accounts with strong passwords, and two-factor authentication. All operating systems are maintained at each vendor’s recommended patch levels for security and are hardened by disabling and/or removing any unnecessary users, protocols, and processes.</p>

    <h3>  Database Security:</h3>
      <p>Whenever possible, database access is controlled at the operating system and database connection level for additional security. Access to production databases is restricted to a limited number of points, and production databases do not share a master password database. All database volumes are encrypted.</p>

      <h3>Server Management Security:</h3>
      <p>All data entered into the AIRA application by a customer is owned by that customer. AIRA's employees do not have direct access to the AIRA production environments, except where necessary for system management, maintenance, monitoring, and backups.</p>

      <h3>Security Development (SDLC):</h3>
      <ul>
      <li>  Secure Code Training:</li> 
       <p> Regarding our Software Development Policy AIRA performs an Annual secure code training for all engineers, based on OWASP Top 10 security risks.</p>

       <h4> Framework Security Controls:</h4>
        <p>ARIA leverages modern and secure open-source frameworks with security controls to limit exposure to OWASP Top 10 security risks. These inherent controls reduce our exposure to SQL Injection (SQLi), Cross Site Scripting (XSS), and Cross Site Request Forgery (CSRF), among others.
        </p>

          <h4> Quality Assurance:</h4>
         <p> Our Quality Assurance (QA) department reviews and tests our code base. Dedicated application security engineers on staff identify, test, and triage security vulnerabilities in code.</p>

       <h4>Separate Environments:</h4>
        <p>Testing and staging environments are logically separated from the Production environment. No Service Data is used in our development or test environments.
        </p>

        <h4> Vulnerability Management: </h4>
         <p> AIRA conducts annual penetration tests to identify and address potential vulnerabilities, reinforcing our commitment to maintaining a secure platform. you can access our Annual Penetration Test Summary on request.</p>
        
         <h3>  Trust and Security:</h3>
          <p> At AIRA, we value your trust and take the security of your information seriously. Here are the key aspects of our approach to trust and security:</p>

          <h4> Data Protection and Privacy:</h4>
       <p> Adherence to all applicable data protection and privacy laws.</p>
       <p> Detailed privacy policy outlining data collection, usage, and protection.</p>

        <h4> Secure Transactions:</h4>
       <p>Industry-standard encryption protocols (SSL) for secure online transactions.</p>

          <h4> Account Security:</h4>
          Prioritising the security of your account with strong password recommendations.
          Optional multi-factor authentication for an additional layer of protection.

          <h4> Regular Security Audits:</h4>
          Conducting frequent security audits to identify and address potential vulnerabilities.

          <h4>Phishing and Scam Prevention:</h4>
                <p> A commitment to never request sensitive information via unsolicited means.</p>
          <p>Encouragement to report suspicious activities to our support team.</p>

          <h4>   Responsible Bug Reporting: </h4>
           <p> Welcoming users to responsibly disclose security vulnerabilities for continuous improvement.</p>

         <h4>  Child Safety: </h4>
          <p>Compliance with child protection laws and a commitment not to knowingly collect personal information from minors without appropriate consent.</p>
         <p> For a comprehensive understanding of our commitment to trust and security, please review our detailed Terms of use and Privacy Policy. If you have any questions or concerns, our support team is here to assist you. Contact us at  <a href="mailto:connect@aira.fr">connect@aira.fr</a></p>
            </div>
        </section>
    </main>
    <?php include './../include/footer.php' ?>
    <?php include './../include/script.php' ?>
</body>

</html>