
----------------------------------------------
php bin/console make:entity DomainCategories --api-resource
name,string,20


----------------------------------------------
php bin/console make:entity Domains --api-resource
name,string,120

category,relation,DomainCategories

ManyToOne
yes
no





----------------------------------------------
php bin/console make:entity BlockLists --api-resource
user_id,string,36

category,relation,DomainCategories









php bin/console make:migration
php bin/console doctrine:migrations:migrate
