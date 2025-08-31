# 🌐 Personal Portfolio Website

A modern and responsive **portfolio website** built with **Laravel, PHP, Tailwind CSS, and JavaScript** to showcase projects, skills, and contact information.  
This project is designed for **junior web developers** to highlight their work and create a professional online presence.

---

## 🚀 Features
- Responsive design (works on desktop & mobile)
- Hero section with introduction
- About Me section
- Skills with progress/percentage
- Projects showcase with details
- Contact form with validation
- Role-based structure (Laravel Blade templates)
- Easy to customize and extend

---

## 🛠️ Tech Stack
- **Backend**: [Laravel](https://laravel.com/) (PHP Framework)  
- **Frontend**: [Blade](https://laravel.com/docs/blade), [Tailwind CSS](https://tailwindcss.com/), JavaScript  
- **Database**: MySQL (optional – only if forms/projects are stored dynamically)  
- **Deployment**: Works on Vercel, Render, or local server (XAMPP/Laragon)

---

## 📂 Project Structure
```bash
portfolio/
├── app/              # Laravel application files
├── resources/
│   ├── views/        # Blade templates (header, footer, sections)
│   └── css/js        # Frontend assets
├── routes/web.php    # Routes for pages/sections
├── public/           # Public assets (images, css, js)
└── README.md         # Project documentation
```

---

## ⚡ Installation & Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/portfolio.git
   cd portfolio
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. Copy `.env.example` to `.env` and configure (if database/contact form is used):
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Run migrations (optional):
   ```bash
   php artisan migrate
   ```

5. Start the development server:
   ```bash
   php artisan serve
   ```

6. Visit the app at:  
   👉 `http://127.0.0.1:8000`

---

## 📸 Screenshots
(Add screenshots or demo GIFs of portfolio here) (soon)

---

## 📬 Contact
Feel free to connect with me:

- GitHub: [Khademul Islam](https://github.com/khademul-menaliam) 
- LinkedIn: [Khademul Islam](https://linkedin.com/)  
- Email: [Khademul Islam](khademulislam1080@gmail.com)

---

## 📄 License
This project is licensed under the **MIT License** – free to use and modify.
