exercise 1:

select produit.prix as Prix_maximum from produit ORDER by produit.prix DESC limit 1;

exercise 2:

SELECT produit.nom as Produit ,categorie.nom as Categorie from produit join categorie on produit.categorie_id=categorie.id;

Exercice 3:

select categorie.nom as Categorie, COUNT(produit.id) as Nombre_de_produits FROM produit join categorie on produit.categorie_id= categorie.id group by categorie.nom;

Exercise 4:

select c.nom AS Categorie, SUM(cmd.quantite) AS "Quantite totale"FROM categorie c
join produit p on p.categorie_id = c.id
join commande cmd on cmd.produit_id = p.id
group by  c.nom
having SUM(cmd.quantite) > 3;