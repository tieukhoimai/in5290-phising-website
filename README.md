# Spear Phishing

This is a spear phishing practice (IN5290 UIO)

<img width="791" alt="image" src="https://github.com/user-attachments/assets/5aacb5a0-fb29-4445-93cd-131e22ea3eef">

**How it work?**

1.	The HTML form collects `username`, `current_password`, and `new_password`.
2.	When submitted, the form sends data to `save_password.php` via POST.
3.	The PHP script:
    - Verifies all fields are filled.
    - Sanitizes the input values.
    - Stores the data in a text file named `password_update.txt`.

You can view the demonstration on the live website here: http://awardspacepwd.atwebpages.com/index.html. Please note that this demonstration is designed for educational purposes as part of my IN5290 course code challenge. Do not input any real account credentials.


