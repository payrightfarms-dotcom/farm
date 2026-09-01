<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Payright Farms Admin') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            :root {
                --af-gold: #5a8f3c;
                --af-brown: #2d4a1e;
                --af-ink: #0f0b05;
                --af-cream: #f4f8f1;
                --af-line: rgba(45, 74, 30, 0.12);
            }
            body {
                margin: 0;
                font-family: 'Manrope', system-ui, -apple-system, sans-serif;
                color: var(--af-ink);
                background:
                    radial-gradient(circle at 14% 18%, rgba(90,143,60,0.1), transparent 28%),
                    radial-gradient(circle at 88% 12%, rgba(45,74,30,0.08), transparent 22%),
                    var(--af-cream);
            }
            .auth-shell {
                min-height: 100vh;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            }
            .auth-brand {
                padding: 32px;
                display: grid;
                gap: 18px;
                align-content: center;
                background: linear-gradient(140deg, rgba(90,143,60,0.1), rgba(255,255,255,0.9));
                border-right: 1px solid var(--af-line);
            }
            .brand-logo-svg {
                width: 78px;
                height: 78px;
                border-radius: 18px;
                border: 1px solid var(--af-line);
                background: #fff;
                box-shadow: 0 16px 40px rgba(0,0,0,0.08);
                padding: 8px;
            }
            .brand-title {
                font-family: 'Playfair Display', Georgia, serif;
                font-size: 28px;
                margin: 0;
            }
            .brand-lead {
                margin: 8px 0 0;
                color: rgba(0,0,0,0.7);
                max-width: 360px;
                line-height: 1.6;
            }
            .pill {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 8px 12px;
                border-radius: 999px;
                border: 1px solid var(--af-line);
                background: #fff;
                font-weight: 600;
                color: var(--af-brown);
                width: fit-content;
            }
            .auth-panel {
                display: grid;
                align-content: center;
                padding: 32px 24px;
            }
            .auth-card {
                width: 100%;
                max-width: 440px;
                margin: 0 auto;
                background: #fff;
                border: 1px solid var(--af-line);
                border-radius: 18px;
                padding: 24px;
                box-shadow: 0 18px 48px rgba(0,0,0,0.12);
            }
            .auth-card h1 {
                margin: 0;
                font-family: 'Playfair Display', Georgia, serif;
                font-size: 24px;
            }
            .auth-card p {
                margin: 6px 0 18px;
                color: rgba(0,0,0,0.65);
            }
            .auth-links {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 14px;
            }
            .auth-links a {
                color: var(--af-brown);
                font-weight: 600;
            }
        </style>
    </head>
    <body>
        <div class="auth-shell">
            <aside class="auth-brand">
                <div style="display:flex;align-items:center;gap:12px;">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="brand-logo-svg">
                        <path d="M50 15 C35 25, 25 45, 25 60 C25 75, 35 85, 50 85 C65 85, 75 75, 75 60 C75 45, 65 25, 50 15 Z" fill="#eaf2e8" stroke="var(--af-gold)" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="50" cy="50" r="12" fill="var(--af-gold)" />
                        <path d="M45 42 Q50 35 55 42" stroke="#fff" stroke-width="3" stroke-linecap="round" />
                        <path d="M50 12 V22M12 50 H22M88 50 H78M50 88 V78" stroke="var(--af-gold)" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <div>
                        <p class="brand-title">Payright Farms</p>
                        <p style="margin:0;color:rgba(0,0,0,0.65);">Admin & Staff Portal</p>
                    </div>
                </div>
                <div class="pill">
                    <span>🐓 Naturally Raised · Processed Right</span>
                </div>
                <p class="brand-lead">
                    Sign in to manage products, inventory, Slaughter House processing, and POS. Brand colors and layout match the main site for consistency.
                </p>
            </aside>
            <main class="auth-panel">
                <div class="auth-card">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
