# Development Requirements Specification (DRS)

## 1. Project Overview

The objective is to build a high-end, modern, and animated personal portfolio website for the brand **"Champika Nuwan"**[cite: 1]. The site must feature a cutting-edge UI/UX with a dark-theme-first approach, 3D elements, and a powerful admin dashboard to manage all aspects of the site in real-time.

---

## 2. Core Tech Stack

- **Frontend:** HTML5, JavaScript (ES6+), Tailwind CSS (via CDN).
- **Backend:** Vanilla PHP (Strictly **No MVC** - Simple File/Folder structure).
- **Database & Auth:** Supabase (PostgreSQL) for data storage and secure authentication.
- **3D & Animations:** Three.js (via CDN), GSAP (GreenSock) for high-performance animations.
- **Icons/Fonts:** Lucide Icons or FontAwesome, Google Fonts (Modern Typography).

---

## 3. UI/UX & Design Requirements

- **Theme:** Default **Dark Theme** with a high-contrast, premium feel.
- **Light/Dark Toggle:** A seamless switcher to change themes globally.
- **Animations:**
  - **3D Hero Section:** Using Three.js to create a "surprise" effect (e.g., interactive particles or a 3D brand logo).
  - **Scroll Reveals:** Smooth entrance animations for sections using GSAP.
  - **Micro-interactions:** Button hovers, magnetic cursors, and loading transitions.
- **Responsiveness:** Must be perfectly optimized for Mobile, Tablet, and Desktop devices.

---

## 4. Website Structure (Sitemap)

1.  **Landing Page:** Hero Area, About Me, Skills (Animated), Featured Projects, Testimonials, and Contact Form.
2.  **Admin Dashboard:** A secure area to manage the site content.
3.  **Project Details:** Dynamic pages for individual portfolio items.

---

## 5. Simple Folder Structure (Non-MVC)

The project must follow a flat and intuitive structure for ease of maintenance.

```text
/champika-nuwan-portfolio
│
├── index.php               # Main Landing Page
├── projects.php            # Dynamic Project Gallery
├── db_config.php           # Supabase Connection Config
│
├── /admin                  # Admin Side
│   ├── index.php           # Admin Dashboard (Protected)
│   ├── settings.php        # Site Settings (Colors, Branding, Logo)
│   ├── manage-projects.php # Add/Edit/Delete Projects
│   └── login.php           # Secure Admin Login
│
├── /assets                 # Static Assets
│   ├── /css                # Tailwind Config & Custom Styles
│   ├── /js                 # Three.js scripts, GSAP animations, Supabase Logic
│   └── /images             # Uploaded media and branding
│
├── /includes               # Reusable Components
│   ├── header.php          # Navbar & Theme Toggle
│   ├── footer.php          # Footer links
│   └── functions.php       # Global PHP helper functions
│
└── .env                    # Secret keys for Supabase
```

---

## 6. Admin Panel & Real-time Management

The Admin Side must allow the user to control:

- **Global Styling:** Change primary/accent colors, update the brand name "Champika Nuwan".
- **Content Management:** Upload project images, descriptions, and update service details.
- **Security:** Multi-factor style login via Supabase Auth.
- **Real-time Updates:** Use Supabase's Realtime capabilities so that changes in the dashboard reflect on the frontend instantly without manual refreshes.

---

## 7. Developer Instructions

1.  **No MVC:** Keep logic and HTML together or use simple `includes/`. Avoid complex routing systems.
2.  **CDN Usage:** Load Three.js, GSAP, and Tailwind CSS via CDN for performance and simplicity.
3.  **Supabase Integration:** Use the Supabase JavaScript Client on the frontend for data fetching and the PHP side for secure server-side operations where needed.
4.  **UX Surprise:** Implement at least one "wow" factor (e.g., a 3D background that reacts to mouse movement).

---

**Brand Name:** Champika Nuwan
**Target Audience:** International & Local Clients / Tech Recruiters
