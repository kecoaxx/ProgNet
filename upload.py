from ftplib import FTP
import os

HOSTNAME = "ftpupload.net"
USERNAME = "if0_34997069"
PASSWORD = "yYFdepZnHH"

def has_named_files(directory):
    for item in os.listdir(directory):
        if os.path.isfile(os.path.join(directory, item)):
            return True
    return False

def upload_directory(ftp, local_dir, remote_dir):
    try:
        # Change to the remote directory
        ftp.cwd(remote_dir)

        # Iterate through the local directory
        for item in os.listdir(local_dir):
            local_path = os.path.join(local_dir, item)
            remote_path = os.path.join(remote_dir, item)

            if os.path.isdir(local_path):
                if has_named_files(local_path):
                    # Create remote directory if it doesn't exist
                    if not ftp.nlst(remote_path):
                        ftp.mkd(remote_path)
                    # Recursively upload subdirectories
                    upload_directory(ftp, local_path, remote_path)
            elif os.path.isfile(local_path):
                # Upload files
                with open(local_path, 'rb') as local_file:
                    ftp.storbinary(f"STOR {remote_path}", local_file)

        print(f"Successfully uploaded {local_dir} to {remote_dir}")
    except Exception as e:
        print(f"Failed to upload {local_dir} to {remote_dir}: {e}")

# Create an FTP connection
ftp = FTP(HOSTNAME)
ftp.login(USERNAME, PASSWORD)

# Define the local and remote directories
local_directory = "."  # Current directory
remote_directory = "/davidsitorus.great-site.net/htdocs"  # Target remote directory

# Upload the local directory to the remote directory
upload_directory(ftp, local_directory, remote_directory)

# Close the FTP connection
ftp.quit()
