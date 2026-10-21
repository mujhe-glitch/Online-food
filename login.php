<?php
session_start();

if (isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid'])) {
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign in | Savory</title>
  <link rel="stylesheet" href="css/tailwind-output.css">
</head>
<body class="min-h-screen bg-cream text-ink antialiased">
  <main class="grid min-h-screen lg:grid-cols-2">
    <section class="relative hidden overflow-hidden bg-leaf p-12 lg:flex lg:flex-col lg:justify-between">
      <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(circle at 20% 10%, #bbf7d0 0, transparent 28%), radial-gradient(circle at 85% 85%, #facc15 0, transparent 26%);"></div>
      <a href="login.php" class="relative flex items-center gap-3 text-xl font-bold tracking-tight text-white">
        <span class="grid h-11 w-11 place-items-center rounded-2xl bg-white text-2xl shadow-lg">🍜</span>
        YashCustomer
      </a>
      <div class="relative max-w-lg">
        <p class="mb-5 text-sm font-bold uppercase tracking-[0.24em] text-emerald-200">Food, simply ordered</p>
        <h1 class="text-5xl font-bold leading-tight text-white xl:text-6xl">Your next favourite meal is a few clicks away.</h1>
        <p class="mt-6 max-w-md text-lg leading-8 text-emerald-50">Browse delicious dishes, order with ease, and keep track of every order from one calm, simple dashboard.</p>
        <div class="mt-10 flex items-center gap-4 text-sm text-emerald-100">
          <span class="rounded-full bg-white/15 px-4 py-2">Fresh choices</span>
          <span class="rounded-full bg-white/15 px-4 py-2">Fast ordering</span>
        </div>
      </div>
      <p class="relative text-sm text-emerald-100">© <?php echo date('Y'); ?> Savory Food Ordering</p>
    </section>

    <section class="flex items-center justify-center px-6 py-12 sm:px-10">
      <div class="w-full max-w-md">
        <a href="login.php" class="mb-12 flex items-center gap-3 text-xl font-bold tracking-tight lg:hidden">
          <span class="grid h-11 w-11 place-items-center rounded-2xl bg-leaf text-2xl shadow-lg">🍜</span>
          YashCustomer
        </a>
        <div class="rounded-3xl border border-stone-200 bg-white p-7 shadow-soft sm:p-10">
          <p class="text-sm font-semibold uppercase tracking-[0.18em] text-green-700">Welcome back</p>
          <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">Sign in to order.</h2>
          <p class="mt-3 text-sm leading-6 text-stone-500">Enter your account details to see today’s menu and your wallet balance.</p>

          <form method="post" action="routers/router.php" class="mt-8 space-y-5">
            <div>
              <label for="username" class="mb-2 block text-sm font-semibold text-stone-700">Username</label>
              <input required autofocus name="username" id="username" type="text" autocomplete="username" placeholder="e.g. yash01" class="block w-full rounded-xl border border-stone-300 bg-stone-50 px-4 py-3.5 text-stone-900 outline-none transition placeholder:text-stone-400 focus:border-green-600 focus:bg-white focus:ring-4 focus:ring-green-100">
            </div>
            <div>
              <label for="password" class="mb-2 block text-sm font-semibold text-stone-700">Password</label>
              <input required name="password" id="password" type="password" autocomplete="current-password" placeholder="Your password" class="block w-full rounded-xl border border-stone-300 bg-stone-50 px-4 py-3.5 text-stone-900 outline-none transition placeholder:text-stone-400 focus:border-green-600 focus:bg-white focus:ring-4 focus:ring-green-100">
            </div>
            <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-leaf px-5 py-3.5 text-sm font-bold text-white shadow-lg shadow-green-900/15 transition hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-200 active:scale-[.99]">
              Sign in <span aria-hidden="true">→</span>
            </button>
          </form>

          <p class="mt-7 text-center text-sm text-stone-500">New here? <a class="font-bold text-green-700 underline decoration-green-300 underline-offset-4 hover:text-green-900" href="register.php">Create an account</a></p>
          <p class="mt-6 rounded-xl bg-amber-50 px-4 py-3 text-xs leading-5 text-amber-800"><span class="font-bold">Demo login:</span> username <code class="font-semibold">yash01</code> · password <code class="font-semibold">yash123</code></p>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
