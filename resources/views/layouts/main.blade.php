<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titlename', 'My Portfolio')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
            line-height: 1.6;
        }

        /* =========================
           CONTAINER
        ========================== */

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        /* =========================
           NAVBAR
        ========================== */

        .site-header {
            background: #0f172a;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            color: white;
            font-size: 1.6rem;
            font-weight: bold;
            text-decoration: none;
        }

        .logo span {
            color: #38bdf8;
        }

        .menu-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .menu-links a {
            color: #cbd5e1;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .menu-links a:hover,
        .menu-links a.active {
            color: #38bdf8;
        }

        /* =========================
           MAIN
        ========================== */

        main {
            min-height: calc(100vh - 140px);
        }

        .main-section {
            padding: 60px 0;
        }

        /* =========================
           PAGE TITLE
        ========================== */

        .page-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .page-heading h1 {
            font-size: 2.4rem;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .page-heading p {
            color: #64748b;
        }

        /* =========================
           CONTACT CARD
        ========================== */

        .contact-card {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
            border: 1px solid #e2e8f0;
        }

        /* =========================
           FORM
        ========================== */

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: #334155;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            font-family: inherit;
            transition: 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #38bdf8;
            box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.15);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 140px;
        }

        /* =========================
           SEND BUTTON
        ========================== */

        .send-btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #0284c7;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .send-btn:hover {
            background: #0369a1;
            transform: translateY(-1px);
        }

        /* =========================
           PROJECT CARDS
        ========================== */

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .project-card {
            background: white;
            padding: 25px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 5px 20px rgba(15, 23, 42, 0.07);
            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
        }

        .project-title {
            color: #0f172a;
            margin-bottom: 12px;
        }

        .project-description {
            color: #64748b;
            margin-bottom: 15px;
        }

        .tech-used {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            background: #e0f2fe;
            color: #0369a1;
            font-size: 13px;
            font-weight: 600;
        }

        .project-url {
            display: block;
            color: #0284c7;
            margin: 15px 0;
            word-break: break-all;
        }

        .project-actions {
            display: flex;
            gap: 10px;
            padding-top: 15px;
            border-top: 1px solid #e2e8f0;
        }

        .edit-btn,
        .delete-btn {
            padding: 8px 15px;
            border-radius: 7px;
            font-weight: 600;
            cursor: pointer;
            border: none;
        }

        .edit-btn {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .delete-btn {
            background: #fee2e2;
            color: #dc2626;
        }

        /* =========================
           FOOTER
        ========================== */

        .site-footer {
            background: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 22px;
        }

        /* =========================
           MOBILE
        ========================== */

        @media (max-width: 700px) {

            .nav-container {
                flex-direction: column;
                gap: 15px;
                padding: 15px 0;
            }

            .menu-links {
                gap: 18px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .contact-card {
                padding: 25px;
            }

            .page-heading h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->

    <header class="site-header">

        <nav>
            <div class="container nav-container">

                <a href="/" class="logo">
                    My<span>Portfolio</span>
                </a>

                <ul class="menu-links">

                    <li>
                        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="/projects" class="{{ request()->is('projects') ? 'active' : '' }}">
                            Projects
                        </a>
                    </li>

                    <li>
                        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

    </header>


    <!-- MAIN CONTENT -->

    <main>

        <section class="main-section">

            <div class="container">

                @yield('contentbox')

            </div>

        </section>

    </main>


    <!-- FOOTER -->

    <footer class="site-footer">

        <p>
            &copy; {{ date('Y') }} My Portfolio.
             reserved by sidra.
        </p>

    </footer>

</body>

</html>
