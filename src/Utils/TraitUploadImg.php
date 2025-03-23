<?php

namespace App\Utils;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

trait TraitUploadImg
{
    public function uploadImg(UploadedFile $file, string $entityFolder, SluggerInterface $slugger): ?string
    {
        $validTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (!in_array($file->getMimeType(), $validTypes)) {
            return null; // type non valide
        }

        if ($file->getSize() > 5 * 1024 * 1024) {
            return null; // trop gros
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        $targetDir = dirname(__DIR__, 2) . '/public/img/' . $entityFolder;

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        try {
            $file->move($targetDir, $newFilename);
        } catch (\Exception $e) {
            return null; // erreur de déplacement
        }

        return 'img/' . $entityFolder . '/' . $newFilename; // chemin relatif pour affichage web
    }
}