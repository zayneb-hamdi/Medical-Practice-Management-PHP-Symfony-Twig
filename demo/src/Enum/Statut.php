<?php
namespace App\Enum;

enum Statut: string {
    case TERMINEE = 'terminee';
    case ATTENTE = 'en attente';
    case ANNULEE= 'annulee';
}
