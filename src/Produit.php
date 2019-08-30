<?php

class Produit
{
private $id;
private $reference;
private $image;
private $description;
private $prix_ht;
private $promotion;

public function __construct(
    int $id,
    string $nom,
    string $reference,
    float $prix_ht,
    string $image ="",
    string $description="",
    bool $promotion =false

)
{
    $this->id =$id;
    $this->nom=$nom;
    $this->reference=$reference;
    $this->image=$image;
    $this->description=$description;
    $this->prix_ht=$prix_ht;
    $this->promotion=$promotion;
}
}

