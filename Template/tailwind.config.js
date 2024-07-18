/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "index.html",
    "login.html",
    "register.html",
    "products.html",
    "product-detail.html",
    "forgot-password.html",
    "change-user.html",
    "admin.html",
    "admin-addProduct.html",
    "admin-addProduct.html",
    "admin-products.html",
    "admin-users.html",
    "admin-comments.html",
    "admin-comment-detail.html",
    "admin-statistical.html",
    "admin-addCategory.html",
    "admin-categories.html",
    "./src/**/*.{html,js}"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        roboto: ["Roboto", "sans-serif"]
      }
    },
  },
  plugins: [],
}