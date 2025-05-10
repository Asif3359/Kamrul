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

        <!-- Navigation var -->
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

        <!-- Section Form for Upload product  -->


        <div class="  py-8">
        <div class=" ">
            <!-- Form Card -->
            <div class=" bg-base-100 shadow-xl">
                <div class="card-body px-10">
                    <h2 class="card-title text-2xl font-bold mb-6">Upload New Products</h2>
                    
                    <form class="space-y-4">
                        <!-- Product Name -->
                        <div class="form-control">
                            <label class="label" for="product-name">
                                <span class="label-text">Product Name</span>
                                <span class="label-text-alt text-error">*</span>
                            </label>
                            <input type="text" id="product-name" placeholder="Enter product name" 
                                   class="input input-bordered w-full" required />
                        </div>
                        
                        <!-- Product Description -->
                        <div class="form-control">
                            <label class="label" for="product-description">
                                <span class="label-text">Description</span>
                            </label>
                            <textarea id="product-description" rows="4" 
                                      class="textarea textarea-bordered w-full" 
                                      placeholder="Detailed product description"></textarea>
                        </div>
                        
                        <!-- Price and Stock -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Price -->
                            <div class="form-control">
                                <label class="label" for="price">
                                    <span class="label-text">Price</span>
                                    <span class="label-text-alt text-error">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">$</span>
                                    <input type="number" id="price" step="0.01" min="0" 
                                           class="input input-bordered w-full pl-8" 
                                           placeholder="0.00" required />
                                </div>
                            </div>
                            
                            <!-- Stock Quantity -->
                            <div class="form-control">
                                <label class="label" for="stock">
                                    <span class="label-text">Stock Quantity</span>
                                    <span class="label-text-alt text-error">*</span>
                                </label>
                                <input type="number" id="stock" min="0" 
                                       class="input input-bordered w-full" 
                                       placeholder="Available quantity" required />
                            </div>
                        </div>
                        
                        <!-- Category and Brand -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Category -->
                            <div class="form-control">
                                <label class="label" for="category">
                                    <span class="label-text">Category</span>
                                    <span class="label-text-alt text-error">*</span>
                                </label>
                                <select id="category" class="select select-bordered w-full" required>
                                    <option disabled selected>Select category</option>
                                    <option>Electronics</option>
                                    <option>Clothing</option>
                                    <option>Home & Garden</option>
                                    <option>Books</option>
                                    <option>Toys</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            
                            <!-- Brand -->
                            <div class="form-control">
                                <label class="label" for="brand">
                                    <span class="label-text">Brand</span>
                                </label>
                                <input type="text" id="brand" 
                                       class="input input-bordered w-full" 
                                       placeholder="Product brand" />
                            </div>
                        </div>
                        
                        <!-- Product Images -->
                        <div class="form-control">
                            <label class="label" for="product-images">
                                <span class="label-text">Product Images</span>
                                <span class="label-text-alt text-error">*</span>
                            </label>
                            <input type="file" id="product-images" 
                                   class="file-input file-input-bordered w-full" 
                                   multiple accept="image/*" required />
                            <div class="flex flex-wrap gap-2 mt-2" id="image-preview">
                                <!-- Image previews will appear here -->
                            </div>
                        </div>
                        
                        <!-- Variants -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Product Variants</span>
                            </label>
                            <div class="space-y-2" id="variants-container">
                                <div class="flex items-center gap-2">
                                    <input type="text" placeholder="Variant name (e.g. Color, Size)" 
                                           class="input input-bordered flex-1" />
                                    <input type="text" placeholder="Options (comma separated)" 
                                           class="input input-bordered flex-1" />
                                    <button type="button" class="btn btn-square btn-error btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-ghost mt-2" id="add-variant">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add Variant
                            </button>
                        </div>
                        
                        <!-- Shipping Information -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Shipping Information</span>
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="form-control">
                                    <label class="label" for="weight">
                                        <span class="label-text">Weight (kg)</span>
                                    </label>
                                    <input type="number" id="weight" step="0.01" min="0" 
                                           class="input input-bordered w-full" placeholder="0.00" />
                                </div>
                                <div class="form-control">
                                    <label class="label" for="length">
                                        <span class="label-text">Length (cm)</span>
                                    </label>
                                    <input type="number" id="length" step="0.01" min="0" 
                                           class="input input-bordered w-full" placeholder="0.00" />
                                </div>
                                <div class="form-control">
                                    <label class="label" for="width">
                                        <span class="label-text">Width (cm)</span>
                                    </label>
                                    <input type="number" id="width" step="0.01" min="0" 
                                           class="input input-bordered w-full" placeholder="0.00" />
                                </div>
                            </div>
                        </div>
                        
                        <!-- Status -->
                        <div class="form-control">
                            <label class="label" for="status">
                                <span class="label-text">Status</span>
                            </label>
                            <select id="status" class="select select-bordered w-full">
                                <option selected>Active</option>
                                <option>Draft</option>
                                <option>Archived</option>
                            </select>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="flex justify-end gap-2 pt-4">
                            <button type="button" class="btn btn-ghost">Cancel</button>
                            <button type="submit" class="btn btn-primary">Upload Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple JavaScript for adding variants and image preview
        document.getElementById('add-variant').addEventListener('click', function() {
            const container = document.getElementById('variants-container');
            const newVariant = document.createElement('div');
            newVariant.className = 'flex items-center gap-2';
            newVariant.innerHTML = `
                <input type="text" placeholder="Variant name (e.g. Color, Size)" 
                       class="input input-bordered flex-1" />
                <input type="text" placeholder="Options (comma separated)" 
                       class="input input-bordered flex-1" />
                <button type="button" class="btn btn-square btn-error btn-sm remove-variant">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            `;
            container.appendChild(newVariant);
            
            // Add event listener to the new remove button
            newVariant.querySelector('.remove-variant').addEventListener('click', function() {
                container.removeChild(newVariant);
            });
        });
        
        // Image preview functionality
        document.getElementById('product-images').addEventListener('change', function(e) {
            const previewContainer = document.getElementById('image-preview');
            previewContainer.innerHTML = '';
            
            for (const file of e.target.files) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const preview = document.createElement('div');
                    preview.className = 'w-24 h-24 relative';
                    preview.innerHTML = `
                        <img src="${event.target.result}" class="w-full h-full object-cover rounded-lg" />
                        <button class="absolute top-0 right-0 btn btn-circle btn-xs btn-error">
                            ×
                        </button>
                    `;
                    previewContainer.appendChild(preview);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

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
