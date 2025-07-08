# 📝 User Management Web App (PHP + MySQL)

This simple web application allows you to:

- Add users (name and age) through a form  
- Store submitted data into a MySQL database  
- Display all users in a dynamic table  
- Toggle each user's status between `0` and `1` (OFF/ON)  
- Update the status **instantly** without reloading the page using JavaScript

---

## 🔧 Technologies Used

- **HTML & CSS** – For layout and styling  
- **JavaScript (Fetch API)** – For real-time interaction  
- **PHP** – For server-side logic and database handling  
- **MySQL** – For storing and managing user data

---

## 📂 Project Structure

```
project-folder/
├── index.php         ← Main page (form + table + logic)
├── db.php            ← Database connection
├── toggle.php        ← Handles status toggling
├── style.css         ← CSS styles for layout and table
├── script.js         ← JavaScript logic for toggling
```

---

## 🗃️ Database Structure

Create a MySQL database named `list` and a table named `user` with the following structure:

```sql
CREATE TABLE user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  age INT,
  status TINYINT(1) DEFAULT 0
);
```

---

## 🚀 How to Run

1. Copy the project folder into `htdocs` (XAMPP) or `www` (Laragon).
2. Start **Apache** and **MySQL** using the control panel.
3. Go to `http://localhost/phpmyadmin` and:
   - Create a database called `list`
   - Run the SQL above to create the `user` table
4. Visit the site in your browser:
   ```
   http://localhost/list/
   ```
5. Add users and toggle their status live!

---

## Pic 📸
![image](https://github.com/user-attachments/assets/bedad006-b29b-438d-9bda-dd207fc511e5)

![image](https://github.com/user-attachments/assets/2eaaa933-ccae-4bcb-acf2-20fdd808a164)

## 🧪 Example Use

- Input: `Name = Ali`, `Age = 25`
- Click “Add” → Record appears in the table below
- Click “Toggle” → Status switches between `OFF` and `ON` instantly

---

## 📌 Notes

- If you rename the table or database, make sure to update the PHP code accordingly.
- All logic is built without frameworks to focus on core web technologies.

