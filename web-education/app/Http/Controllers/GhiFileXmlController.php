<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DOMDocument;

class GhiFileXmlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ghiDuLieu(Request $request)
    {
        $xmldoc = new DOMDocument('1.0', 'utf-8');
        $xmldoc->formatOutput = true;
        $root = $xmldoc->createElement("books");
        $xmldoc->appendChild($root);
        $dem = $request->all();
        $dem1 = count($dem)/6;
        for ($i = 1; $i <= $dem1; $i++)
        {
            $cauHoi = $xmldoc->createElement("cauHoi");
            $noiDung = $xmldoc->createElement("noiDung");
            $noiDung->appendChild(
                $xmldoc->createTextNode($request->input('noiDung'.$i))
            );
            $dapAnA = $xmldoc->createElement("dapAnA");
            $dapAnA->appendChild(
                $xmldoc->createTextNode($request->input('dapAnA'.$i))
            );
            $dapAnB = $xmldoc->createElement("dapAnB");
            $dapAnB->appendChild(
                $xmldoc->createTextNode($request->input('dapAnB'.$i))
            );
            $dapAnC = $xmldoc->createElement("dapAnC");
            $dapAnC->appendChild(
                $xmldoc->createTextNode($request->input('dapAnC'.$i))
            );
            $dapAnD = $xmldoc->createElement("dapAnD");
            $dapAnD->appendChild(
                $xmldoc->createTextNode($request->input('dapAnD'.$i))
            );
            $dapAnDung = $xmldoc->createElement("dapAnDung");
            $dapAnDung->appendChild(
                $xmldoc->createTextNode($request->input('dapAnDung'.$i))
            );
            $cauHoi->appendChild($noiDung);
            $cauHoi->appendChild($dapAnA);
            $cauHoi->appendChild($dapAnB);
            $cauHoi->appendChild($dapAnC);
            $cauHoi->appendChild($dapAnD);
            $cauHoi->appendChild($dapAnDung);
            $root->appendChild($cauHoi);
        }

        $xmldoc->save("books.xml");
        echo '<script>
                alert("Thêm thành công!"); 
               
              </script>'; 
              // window.location.replace("view.html");
        return redirect('them-cau-hoi');
    }

    public function docDuLieu()
    {
        $xml = simplexml_load_file("books.xml")
        or die("Không thể load file XML");
        $cauHoi = $xml->cauHoi;
        return view('trac-nghiem',compact('cauHoi'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
