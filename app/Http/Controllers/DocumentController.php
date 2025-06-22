<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\DocumentModel;
use Illuminate\Http\Request;

class DocumentController extends Controller {
    public function download( $id ) {
        $document = DocumentModel::findorfail( $id );
        $pdf_path = $document->pdf_path;
        if ( !Storage::exists( $pdf_path ) ) {
            return abort( 404, 'file not found' )->with( 'document', $document );
            ;
        }
        return Storage::download( $pdf_path, basename ( $pdf_path ) );
    }
}
