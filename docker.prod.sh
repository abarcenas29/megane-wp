docker-compose down
docker-compose -f docker-compose.yml -f docker-compose.prod.yml up -d wp
docker-compose exec wp chgrp -R nginx .
