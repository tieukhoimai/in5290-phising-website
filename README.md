# Spear Phishing

This is a spear phishing email practice (IN5290 UIO)
<img width="666" alt="image" src="https://github.com/user-attachments/assets/74a6de96-1118-457a-a107-cb35dc82d058">

<img width="892" alt="Screenshot 2024-10-31 at 16 53 12" src="https://github.com/user-attachments/assets/c31a4493-6cf2-40d4-b0ba-52e443fc6b22">

How it work?
1.	The HTML form collects `username`, `current_password`, and `new_password`.
2.	When submitted, the form sends data to `save_password.php` via POST.
3.	The PHP script:
    - Verifies all fields are filled.
    - Sanitizes the input values.
    - Stores the data in a text file named `password_update.txt`.

You can view the demonstration on the live website here: http://awardspacepwd.atwebpages.com. Please note that this demonstration is designed for educational purposes as part of my IN5290 course code challenge. Do not input any real account credentials.


