# You need to create 'root' username and password before running the following

echo "CREATE DATABASE IF NOT EXISTS Miam;" | sudo mysql -u root -proot
sudo mysql -h localhost -u root Miam < init_db.sql
echo "Script executed"
