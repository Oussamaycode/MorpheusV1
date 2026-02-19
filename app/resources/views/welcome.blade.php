<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Vortex Cloud | The Future of Gaming</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#895af6",
                        "background-light": "#f6f5f8",
                        "background-dark": "#050508",
                        "surface-dark": "#12101a",
                        "accent-blue": "#3b82f6",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .glass {
            background: rgba(18, 16, 26, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(137, 90, 246, 0.1);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(137, 90, 246, 0.2);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            border-color: rgba(137, 90, 246, 0.6);
            box-shadow: 0 0 20px rgba(137, 90, 246, 0.15);
            transform: translateY(-4px);
        }
        .hero-gradient {
            background: radial-gradient(circle at 50% 50%, rgba(137, 90, 246, 0.15) 0%, transparent 70%);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 overflow-x-hidden">
<!-- Top Navigation Bar -->
<header class="fixed top-0 left-0 right-0 z-50 glass border-b border-primary/10">
<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="size-10 bg-primary rounded-lg flex items-center justify-center shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-white text-2xl">cyclone</span>
</div>
<h1 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white uppercase">Vortex<span class="text-primary">Cloud</span></h1>
</div>
<nav class="hidden md:flex items-center gap-10">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#features">Features</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#pricing">Pricing</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#games">Games</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#login">Login</a>
</nav>
<div class="flex items-center gap-4">
<button class="hidden sm:flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-lg font-bold text-sm hover:brightness-110 transition-all shadow-lg shadow-primary/25">
<span class="material-symbols-outlined text-sm">download</span>
                    Download Client
                </button>
<button class="md:hidden text-slate-900 dark:text-white">
<span class="material-symbols-outlined text-3xl">menu</span>
</button>
</div>
</div>
</header>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">
<!-- Background Elements -->
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-gradient-to-b from-background-dark via-transparent to-background-dark opacity-80"></div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] hero-gradient rounded-full blur-3xl"></div>
<img alt="Futuristic hardware" class="w-full h-full object-cover opacity-30 grayscale hover:grayscale-0 transition-all duration-700" data-alt="Futuristic 3D gaming hardware aesthetic background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBK09zWa5TDpOj2zM7Kn5ylaG-tLeGwI5y7MOnLviY0N9J0_JIqtKnEOvwwrKYYpcs7mHRGpqpQ73nkrv6NUM2ehD_AcqHuHBTtykH4pfLEGS5tMthMncm3sZLPENG0Twv_AU7g0ltCzKrmT15R3vHwtjh4-C7jMF3QBen8zWl5P3qokFUUX0Vap6wyid78UzAaFmjPP3E0X2XVEdn4jJBkPaqFRmjlXWImy2NJtsxwAqp-xzMhAEkwuzp9Y5BtjcDl9gJNENXMSi00"/>
</div>
<div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-widest mb-8">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
</span>
                    Next Gen Cloud Gaming
                </div>
<h1 class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tight mb-8 bg-clip-text text-transparent bg-gradient-to-b from-white to-slate-400 leading-[1.1]">
                    The Future of Gaming is Here.
                </h1>
<p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto mb-12 font-medium">
                    Stream AAA titles at <span class="text-white">4K 120FPS</span> on any device. 
                    Experience the raw power of RTX 3080 &amp; A100 GPUs without the hardware cost.
                </p>
<div class="flex flex-col sm:flex-row items-center justify-center gap-6">
<button class="w-full sm:w-auto px-10 py-5 bg-primary text-white rounded-xl font-extrabold text-lg hover:scale-105 transition-transform shadow-xl shadow-primary/30 flex items-center justify-center gap-2">
                        Get Started Now
                        <span class="material-symbols-outlined">rocket_launch</span>
</button>
<button class="w-full sm:w-auto px-10 py-5 glass text-white rounded-xl font-bold text-lg hover:bg-white/5 transition-colors flex items-center justify-center gap-2">
                        Explore Library
                    </button>
</div>
<!-- Trust Badges -->
<div class="mt-20 pt-10 border-t border-white/5 grid grid-cols-2 md:grid-cols-4 gap-8 opacity-50 grayscale">
<div class="flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-primary">memory</span>
<span class="text-sm font-bold tracking-widest uppercase">NVIDIA A100</span>
</div>
<div class="flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-primary">speed</span>
<span class="text-sm font-bold tracking-widest uppercase">10Gbps Fiber</span>
</div>
<div class="flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-primary">hdr_auto</span>
<span class="text-sm font-bold tracking-widest uppercase">4K HDR Support</span>
</div>
<div class="flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-primary">devices</span>
<span class="text-sm font-bold tracking-widest uppercase">Cross Platform</span>
</div>
</div>
</div>
</section>
<!-- Features Section -->
<section class="py-32 bg-background-dark relative overflow-hidden" id="features">
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-3xl rounded-full translate-x-1/2 -translate-y-1/2"></div>
<div class="max-w-7xl mx-auto px-6">
<div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
<div class="max-w-2xl">
<h2 class="text-primary font-bold text-sm tracking-[0.2em] uppercase mb-4">Elite Performance</h2>
<h3 class="text-4xl md:text-5xl font-black text-white leading-tight">
                            Engineered for those who refuse to compromise.
                        </h3>
</div>
<p class="text-slate-400 text-lg max-w-sm">
                        Our distributed edge computing infrastructure ensures the lowest latency possible, wherever you are.
                    </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Feature 1 -->
<div class="glass-card p-10 rounded-xl group">
<div class="size-14 rounded-lg bg-primary/20 flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">developer_board</span>
</div>
<h4 class="text-2xl font-bold text-white mb-4">High-Performance GPUs</h4>
<p class="text-slate-400 leading-relaxed">
                            Powered by NVIDIA A100 and RTX 3080 nodes. Render the most demanding AAA titles with ultra-settings and ray tracing.
                        </p>
</div>
<!-- Feature 2 -->
<div class="glass-card p-10 rounded-xl group">
<div class="size-14 rounded-lg bg-primary/20 flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">bolt</span>
</div>
<h4 class="text-2xl font-bold text-white mb-4">Zero Latency</h4>
<p class="text-slate-400 leading-relaxed">
                            Global edge network nodes reduce input lag to near-zero. Frame-perfect responsiveness for competitive gaming.
                        </p>
</div>
<!-- Feature 3 -->
<div class="glass-card p-10 rounded-xl group">
<div class="size-14 rounded-lg bg-primary/20 flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">library_books</span>
</div>
<h4 class="text-2xl font-bold text-white mb-4">Massive Library</h4>
<p class="text-slate-400 leading-relaxed">
                            Seamlessly sync your existing Steam, GOG, and Epic Games Store libraries. No need to buy your games twice.
                        </p>
</div>
</div>
</div>
</section>
<!-- How It Works Section -->
<section class="py-32 bg-surface-dark border-y border-white/5">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-24">
<h2 class="text-4xl md:text-5xl font-black text-white mb-6 tracking-tight">How It Works</h2>
<p class="text-slate-400 max-w-xl mx-auto text-lg">Gaming in the cloud has never been this simple. Follow three easy steps to unlock ultimate performance.</p>
</div>
<div class="relative">
<!-- Connector Line (Desktop) -->
<div class="hidden md:block absolute top-1/2 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/30 to-transparent -translate-y-1/2"></div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8">
<!-- Step 1 -->
<div class="relative flex flex-col items-center text-center group">
<div class="size-20 rounded-full glass border-2 border-primary/40 flex items-center justify-center text-white font-black text-2xl mb-8 relative z-10 group-hover:border-primary transition-all shadow-xl shadow-primary/10">
                                01
                            </div>
<div class="glass-card p-8 rounded-xl w-full">
<span class="material-symbols-outlined text-primary text-4xl mb-4">shopping_cart</span>
<h4 class="text-xl font-bold text-white mb-3 uppercase tracking-wider">Pick a Plan</h4>
<p class="text-slate-400">Choose the tier that fits your resolution needs, from 1080p to 4K HDR.</p>
</div>
</div>
<!-- Step 2 -->
<div class="relative flex flex-col items-center text-center group">
<div class="size-20 rounded-full glass border-2 border-primary/40 flex items-center justify-center text-white font-black text-2xl mb-8 relative z-10 group-hover:border-primary transition-all shadow-xl shadow-primary/10">
                                02
                            </div>
<div class="glass-card p-8 rounded-xl w-full">
<span class="material-symbols-outlined text-primary text-4xl mb-4">terminal</span>
<h4 class="text-xl font-bold text-white mb-3 uppercase tracking-wider">Connect to VM</h4>
<p class="text-slate-400">Instant access to your dedicated high-end gaming rig through our lightweight client.</p>
</div>
</div>
<!-- Step 3 -->
<div class="relative flex flex-col items-center text-center group">
<div class="size-20 rounded-full glass border-2 border-primary/40 flex items-center justify-center text-white font-black text-2xl mb-8 relative z-10 group-hover:border-primary transition-all shadow-xl shadow-primary/10">
                                03
                            </div>
<div class="glass-card p-8 rounded-xl w-full">
<span class="material-symbols-outlined text-primary text-4xl mb-4">sports_esports</span>
<h4 class="text-xl font-bold text-white mb-3 uppercase tracking-wider">Start Gaming</h4>
<p class="text-slate-400">Launch any game from your library and play at smooth 120FPS instantly.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA / Stats Section -->
<section class="py-24 relative overflow-hidden">
<div class="absolute inset-0 bg-primary/10 opacity-50 skew-y-3 origin-right"></div>
<div class="max-w-7xl mx-auto px-6 relative z-10">
<div class="bg-gradient-to-r from-primary to-primary/80 rounded-3xl p-12 md:p-20 flex flex-col md:flex-row items-center justify-between gap-12 shadow-2xl shadow-primary/20">
<div class="max-w-xl">
<h2 class="text-4xl md:text-5xl font-black text-white mb-6">Ready to transcend hardware limits?</h2>
<p class="text-white/80 text-lg font-medium">Join 500,000+ gamers who have already switched to the cloud. No downloads, no updates, just gaming.</p>
</div>
<div class="flex flex-col gap-4 w-full md:w-auto">
<button class="bg-white text-primary px-10 py-5 rounded-xl font-black text-xl hover:bg-slate-50 transition-colors shadow-lg shadow-black/10">
                            Get Started Now
                        </button>
<p class="text-white/60 text-sm text-center">No credit card required for 2-hour trial.</p>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-background-dark pt-20 pb-10 border-t border-white/5">
<div class="max-w-7xl mx-auto px-6">
<div class="grid grid-cols-2 md:grid-cols-5 gap-12 mb-20">
<div class="col-span-2">
<div class="flex items-center gap-3 mb-8">
<div class="size-8 bg-primary rounded flex items-center justify-center">
<span class="material-symbols-outlined text-white text-lg">cyclone</span>
</div>
<h1 class="text-lg font-bold tracking-tight text-white uppercase">Vortex<span class="text-primary">Cloud</span></h1>
</div>
<p class="text-slate-500 mb-8 max-w-sm">
                        Building the infrastructure for the next generation of entertainment. High-performance computing, accessible to everyone.
                    </p>
<div class="flex items-center gap-4">
<a class="size-10 rounded-lg glass flex items-center justify-center text-slate-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-xl">share</span>
</a>
<a class="size-10 rounded-lg glass flex items-center justify-center text-slate-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-xl">forum</span>
</a>
<a class="size-10 rounded-lg glass flex items-center justify-center text-slate-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-xl">mail</span>
</a>
</div>
</div>
<div>
<h5 class="text-white font-bold mb-6">Product</h5>
<ul class="space-y-4">
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Features</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Pricing</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Supported Games</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">System Req</a></li>
</ul>
</div>
<div>
<h5 class="text-white font-bold mb-6">Company</h5>
<ul class="space-y-4">
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">About Us</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Careers</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Press Kit</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Blog</a></li>
</ul>
</div>
<div>
<h5 class="text-white font-bold mb-6">Support</h5>
<ul class="space-y-4">
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Help Center</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Server Status</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Terms of Service</a></li>
<li><a class="text-slate-500 hover:text-white transition-colors" href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
<p class="text-slate-600 text-sm">© 2024 Vortex Cloud Inc. All rights reserved.</p>
<div class="flex items-center gap-6">
<img alt="Payments" class="h-6 opacity-30 grayscale" data-alt="Payment provider logos" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhQN6cePjQ4A6WkEQmTCZfPrNGJnSDBWO3emD16dhlU6RWl5e6euoB0xvv1-ewExTHaxKE4QjaCn9c-3cjchoBZH377H2OxFT6jpqrlL6gIlnbPVrvrCsDzyeJk4jUIT7g2f2rTfkXExNebD6S5xWFeG-hLKCHkuAZMYqLGZQBN3VwyqWxEp6eububize_ATq-vm6PWWW4Oy6KYEf7q80ET1NxbPaZjFg3xgrxArQQT1w1kftEEeokFAeSTLPJZeLYybetl_1ryaBU"/>
<span class="text-xs text-slate-700 font-bold uppercase tracking-widest">Powered by NVidia Edge Network</span>
</div>
</div>
</div>
</footer>
</body></html>