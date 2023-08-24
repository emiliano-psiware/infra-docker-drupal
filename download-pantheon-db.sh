#La url de pantheon va entre "" sh download-pantheon-db.sh "https://storage.googleapis.com/gcs-pantheon-backups/ ...."
wget -O dump.sql.gz "$1" --no-check-certificate
gunzip dump.sql.gz
