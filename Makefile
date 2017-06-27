DATABASE_BACKUP_FILE := banco/banco-`date +%Y-%m-%d`.sql
backup: 
	@mysqldump -u root lib > $(DATABASE_BACKUP_FILE)
	@echo "backup done to '$(DATABASE_BACKUP_FILE)'"

restore:
	@mysql -u root -D lib < $(file)