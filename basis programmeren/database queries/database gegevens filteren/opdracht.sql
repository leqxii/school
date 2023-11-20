-- Query 1
SELECT naam, roepnaam
FROM cursist
WHERE plaats = 'Oosterhout';

-- Query 2
SELECT cursistnr, roepnaam
FROM cursist
WHERE plaats != 'Oosterhout';

-- Query 3
SELECT *
FROM cursist
WHERE geslacht = 'V';

-- Query 4
SELECT *
FROM cursist
WHERE NOT geslacht = 'M';

-- Query 5
SELECT *
FROM cursist
WHERE plaats = 'Breda' AND geslacht = 'V';

-- Query 6
SELECT *
FROM cursist
WHERE plaats IN ('Oosterhout', 'Made');

-- Query 7
SELECT DISTINCT curs_plts
FROM cursus;
