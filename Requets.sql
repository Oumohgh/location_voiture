exercise 1:

select produit.prix as Prix_maximum from produit ORDER by produit.prix DESC limit 1;

exercise 2:

SELECT produit.nom as Produit ,categorie.nom as Categorie from produit join categorie on produit.categorie_id=categorie.id;

Exercice 3:

select categorie.nom as Categorie, COUNT(produit.id) as Nombre_de_produits FROM produit join categorie on produit.categorie_id= categorie.id group by categorie.nom;

Exercise 4:
select categorie.nom as Categorie,SUM(commande.quantite) AS Quantite_total from commande join produit on commande.produit_id=produit.id join categorie on produit.categorie_id=categorie.id where commande.quantite>3 group by categorie.nom;