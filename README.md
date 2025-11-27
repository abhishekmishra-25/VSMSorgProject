**Vehicle Service Management System (VSMS)**

---

## 💡 **Brief One-Line Summary:**

A web-based platform that automates vehicle service booking, management, payment, and tracking for customers and service centers.

---

## 📘 **Overview:**

The Vehicle Service Management System is a full-featured web application built to streamline vehicle maintenance and service operations. It enables customers to book vehicle services online, track real-time status, make online payments, and provide feedback. Admins and service providers can manage bookings, generate invoices, assign technicians, and view reports via an intuitive dashboard.

This project enhances transparency, reduces manual errors, and improves customer satisfaction in vehicle service centers.

---

## ❗ **Problem Statement:**

Traditional vehicle service centers rely heavily on manual systems, leading to inefficiencies such as lost records, delayed updates, poor communication, and lack of service tracking. The Vehicle Service Management System aims to digitize the entire workflow, offering automation, accuracy, and real-time monitoring for both customers and administrators.

---

## 🗄️ **Dataset / Database:**

* **Database Name:** `vsms_db`
* **Tables Included:**

  * `adminlogin_tb` — Stores admin login information
  * `assets_tb` — Contains vehicle details linked to users
  * `assignwork_tb` — List of available service types and pricing
  * `customer_tb` — Stores user service bookings and status
  * `requesterlogin_tb` — Tracks online payments and transactions
  * `submitrequest_tb` — Manages ratings and reviews
  * `mechanics_tb` — Stores mechanics 

---

## 🧰 **Tools and Technologies:**

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Server:** Apache (via XAMPP)
* **Libraries/Plugins:**

  * PHPMailer (for email notifications)
  * Razorpay / PayPal (for payment gateway integration)
---

## ⚙️ **Methods / Modules:**

1. **User Management** – Registration, login, and profile management.
2. **Vehicle Management** – Add, view, and edit vehicle details.
3. **Service Booking** – Book vehicle services and schedule appointments.
4. **Payment Integration** – Secure online payments via Razorpay/PayPal.
5. **Job Card Management** – Track ongoing and completed services.
6. **Invoice Generation** – Automatic invoice after service completion.
7. **Feedback System** – Ratings and reviews for completed services.
8. **Notifications & Alerts** – Email/SMS notifications for updates.
9. **Admin Dashboard** – Manage users, view analytics, and monitor performance.

---

## 📊 **Key Insights:**

* Eliminates manual record-keeping errors.
* Improves service efficiency and transparency.
* Tracks vehicle service history and payment records.
---

## 🖥️ **Dashboard / Model / Output:**

* **Customer Dashboard:**
  * Book services, view status, and download invoices.
    
* **Admin Dashboard:**
  * Manage users, view total revenue, service reports, and feedback.
    
* **Reports:**
  * Graphs showing service trends, total income, and customer ratings.

---

## **How to Run This Project:**

1. **Install XAMPP** (or any local PHP server).
2. **Copy the project folder** to the `htdocs` directory.
   ```
   C:\xampp\htdocs\vsms
   ```
3. **Start Apache and MySQL** from the XAMPP Control Panel.
4. **Create Database:**

   * Visit `http://localhost/phpmyadmin/`
   * Create a new database named `vsms_db`
   * Import the `vsms_db.sql` file provided in the project folder.
5. **Run the Project:**

   * Open a browser and go to:

     ```
     http://localhost/vsms/
     ```
6. **Login Credentials (Sample):**

   * **Admin:** [admin@gmail.com](mailto:admin@gmail.com) / admin123
   * **User:** [user@gmail.com](mailto:user@gmail.com) / user123

---

## 🧩 **Results and Conclusion:**

The Vehicle Service Management System successfully automates the workflow of vehicle service centers. 
It improves operational efficiency, ensures transparent communication, and provides a seamless experience for customers. 
Admins can monitor all activities in real time and make data-backed decisions to enhance service quality.

---

## 🚀 **Future Work:**

* Integration with **Google Maps API** for nearby service centers.
* Adding **AI Chatbot** for automated customer support.
* Implementing **Mobile App (Flutter / React Native)** for better accessibility.
* Integration of **Real-time Notifications (WebSockets/Firebase)**.
---

## 👨‍💻 **Author and Contact:**

**Author:** Abhishek Mishra

**Email:** [[abhishekk.dev25@gmail.com](mailto:abhishekk.dev25@gmail.com)]

**LinkedIn:** [linkedin.com/in/abhishek-mishra-717948305](#)

**GitHub:** [github.com/abhishekmishra-25](#)

<img width="1920" height="1080" alt="2025-11-27" src="https://github.com/user-attachments/assets/b5d39974-3f03-4a44-b3b3-362483c59a4c" />

