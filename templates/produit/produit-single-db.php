<div class="produit">
    <p><?php echo $produit['id_produit']; ?></p>
    <p><?php echo $produit['nom_produit']; ?></p>
    <p><?php echo $produit['reference']; ?></p>
    <p><img src="<?php echo $produit['image']; ?>" /></p>
    <p><?php echo $produit['description']; ?></p>
    <p><?php echo $produit['prix_unitaire_ht']; ?>€</p>
    <?php if($produit['promotion']) { ?>
        <p style="background-color: green; color: #FFF; padding: 0.5em;">
            PROMOTION
        </p>
    <?php } ?>
</div>