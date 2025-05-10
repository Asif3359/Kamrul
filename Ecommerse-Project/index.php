<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dahsboard Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col ">
        <!-- Page content here -->
        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
        Open drawer
        </label>
        <!-- Nav bar -->
        <div class="navbar bg-base-100 shadow-sm">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">daisyUI</a>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /> </svg>
                    <span class="badge badge-sm indicator-item">8</span>
                    </div>
                </div>
                <div
                    tabindex="0"
                    class="card card-compact dropdown-content bg-base-100 z-1 mt-3 w-52 shadow">
                    <div class="card-body">
                    <span class="text-lg font-bold">8 Items</span>
                    <span class="text-info">Subtotal: $999</span>
                    <div class="card-actions">
                        <button class="btn btn-primary btn-block">View cart</button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                    <img
                        alt="Tailwind CSS Navbar component"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li>
                    <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
                </div>
                </div>
        </div>

<!-- Main content -->
        <!-- <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
            <h1 class="text-2xl font-bold">Dashboard Overview</h1>
            <p class="text-gray-600">Welcome back, Admin!</p>
            </div>
            <div class="flex items-center gap-2">
            <div class="form-control">
                <div class="input-group">
                <input type="text" placeholder="Search..." class="input input-bordered" />
                <button class="btn btn-square">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full bg-primary text-white flex items-center justify-center">
                    <span class="text-lg">A</span>
                </div>
                </label>
                <ul tabindex="0" class="mt-3 p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li><a>Profile</a></li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
                </ul>
            </div>
            </div>
        </div> -->

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-4 mb-8">
            <div class="card bg-white shadow-sm">
            <div class="card-body">
                <div class="flex items-center justify-between">
                <div>
                    <h2 class="card-title text-gray-500">Total Revenue</h2>
                    <p class="text-3xl font-bold">$24,780</p>
                </div>
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                </div>
                <div class="text-sm text-green-600 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span>12.5% from last month</span>
                </div>
            </div>
            </div>

            <div class="card bg-white shadow-sm">
            <div class="card-body">
                <div class="flex items-center justify-between">
                <div>
                    <h2 class="card-title text-gray-500">Total Orders</h2>
                    <p class="text-3xl font-bold">1,245</p>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                </div>
                <div class="text-sm text-green-600 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span>8.2% from last month</span>
                </div>
            </div>
            </div>

            <div class="card bg-white shadow-sm">
            <div class="card-body">
                <div class="flex items-center justify-between">
                <div>
                    <h2 class="card-title text-gray-500">Products</h2>
                    <p class="text-3xl font-bold">568</p>
                </div>
                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                </div>
                <div class="text-sm text-green-600 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span>3 new this week</span>
                </div>
            </div>
            </div>

            <div class="card bg-white shadow-sm">
            <div class="card-body">
                <div class="flex items-center justify-between">
                <div>
                    <h2 class="card-title text-gray-500">Customers</h2>
                    <p class="text-3xl font-bold">8,742</p>
                </div>
                <div class="p-3 rounded-full bg-orange-100 text-orange-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                </div>
                <div class="text-sm text-red-600 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span>2.1% from last month</span>
                </div>
            </div>
            </div>
        </div>

        <!-- Charts and Recent Orders -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Sales Chart -->
            <div class="card bg-white shadow-sm lg:col-span-2">
            <div class="card-body">
                <div class="flex justify-between items-center mb-4">
                <h2 class="card-title">Sales Overview</h2>
                <select class="select select-bordered select-sm">
                    <option>This Month</option>
                    <option>Last Month</option>
                    <option>This Year</option>
                </select>
                </div>
                <div class="h-80 bg-gray-100 rounded-lg flex items-center justify-center">
                <!-- Chart placeholder - would be replaced with actual chart library -->
                <p class="text-gray-500">Sales Chart Visualization</p>
                </div>
            </div>
            </div>

            <!-- Top Products -->
            <div class="card bg-white shadow-sm">
            <div class="card-body">
                <h2 class="card-title mb-4">Top Products</h2>
                <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="avatar">
                    <div class="w-12 rounded">
                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="product" />
                    </div>
                    </div>
                    <div class="flex-1">
                    <h3 class="font-medium">Wireless Headphones</h3>
                    <p class="text-sm text-gray-500">$129.99</p>
                    </div>
                    <div class="badge badge-primary">45 sold</div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="avatar">
                    <div class="w-12 rounded">
                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="product" />
                    </div>
                    </div>
                    <div class="flex-1">
                    <h3 class="font-medium">Smart Watch</h3>
                    <p class="text-sm text-gray-500">$199.99</p>
                    </div>
                    <div class="badge badge-primary">32 sold</div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="avatar">
                    <div class="w-12 rounded">
                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="product" />
                    </div>
                    </div>
                    <div class="flex-1">
                    <h3 class="font-medium">Bluetooth Speaker</h3>
                    <p class="text-sm text-gray-500">$79.99</p>
                    </div>
                    <div class="badge badge-primary">28 sold</div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="avatar">
                    <div class="w-12 rounded">
                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="product" />
                    </div>
                    </div>
                    <div class="flex-1">
                    <h3 class="font-medium">Phone Case</h3>
                    <p class="text-sm text-gray-500">$24.99</p>
                    </div>
                    <div class="badge badge-primary">25 sold</div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <div class="card bg-white shadow-sm">
            <div class="card-body">
            <div class="flex justify-between items-center mb-4">
                <h2 class="card-title">Recent Orders</h2>
                <button class="btn btn-sm btn-ghost">View All</button>
            </div>
            <div class="overflow-x-auto">
                <table class="table">
                <thead>
                    <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>#ORD-7841</td>
                    <td>John Smith</td>
                    <td>12 May 2023</td>
                    <td>$129.99</td>
                    <td><span class="badge badge-success">Completed</span></td>
                    <td>
                        <button class="btn btn-ghost btn-xs">Details</button>
                    </td>
                    </tr>
                    <tr>
                    <td>#ORD-7839</td>
                    <td>Sarah Johnson</td>
                    <td>11 May 2023</td>
                    <td>$89.50</td>
                    <td><span class="badge badge-success">Completed</span></td>
                    <td>
                        <button class="btn btn-ghost btn-xs">Details</button>
                    </td>
                    </tr>
                    <tr>
                    <td>#ORD-7835</td>
                    <td>Michael Brown</td>
                    <td>10 May 2023</td>
                    <td>$245.75</td>
                    <td><span class="badge badge-warning">Processing</span></td>
                    <td>
                        <button class="btn btn-ghost btn-xs">Details</button>
                    </td>
                    </tr>
                    <tr>
                    <td>#ORD-7828</td>
                    <td>Emily Davis</td>
                    <td>9 May 2023</td>
                    <td>$199.99</td>
                    <td><span class="badge badge-error">Cancelled</span></td>
                    <td>
                        <button class="btn btn-ghost btn-xs">Details</button>
                    </td>
                    </tr>
                    <tr>
                    <td>#ORD-7821</td>
                    <td>Robert Wilson</td>
                    <td>8 May 2023</td>
                    <td>$79.99</td>
                    <td><span class="badge badge-info">Shipped</span></td>
                    <td>
                        <button class="btn btn-ghost btn-xs">Details</button>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 text-base-content flex flex-col justify-between min-h-full w-80 p-4">
        <!-- Sidebar content here -->
        <ul>
            <li><a href="/">Dahsboard</a></li>
            <li><a href = "/Pages/uploadproduct.php">Upload New Product</a></li>
        </ul>
        <ul>
           <li><a href = "/auth/signup.php">sign up</a></li>
            <li><a href = "/auth/login.php">Log in </a></li>
            <li><a href = "/auth/logout.php">Logout</a></li>
           </ul>
        </ul>
    </div>
    </div>
</body>
</html>