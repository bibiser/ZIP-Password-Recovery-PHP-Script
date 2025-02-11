# ZIP-Password-Recovery-PHP-Script

# ZIP Password Recovery Script (Educational Purpose Only)

## 🚀 About This Script  
This PHP script is an **educational tool** designed to demonstrate brute-force password recovery techniques on ZIP files. It systematically attempts numeric passwords (from `000000` to `999999`) to unlock a ZIP archive.  

> **⚠ Disclaimer:** This script is strictly for **educational and ethical purposes**. Do not use it to access files without explicit permission. Unauthorized use may violate laws and ethical guidelines.

## 📌 Features  
✅ Attempts numeric passwords (6-digit range)  
✅ Displays progress every 1,000 attempts  
✅ Stops immediately upon finding the correct password  
✅ Unlimited execution time for long-running operations  

## 🛠 Requirements  
- PHP 7+  
- `ZipArchive` extension enabled  

## 🔧 Usage  
1. Place the ZIP file you want to test in the same directory as the script.  
2. Rename the file to `recover.zip` (or modify `$zipFile` in the script).  
3. Run the script using:  
   ```sh
   php script.php

   If the password is found, the contents will be extracted into the unzipped folder.
## ⚠ Legal & Ethical Notice
This script is intended only for educational and testing purposes on files you legally own. Unauthorized usage against third-party data is illegal and unethical. Use responsibly!

## 📜 License
This project is released under the MIT License. See LICENSE for details.

## 🙏 Acknowledgments
Special thanks to the open-source community for knowledge-sharing and ethical hacking education.

This README clearly explains the purpose, usage, and legal disclaimer while making it professional for GitHub. Let me know if you need any modifications! 🚀
