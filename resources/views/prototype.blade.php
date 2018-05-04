<!DOCTYPE html>
<html lang="de">
<head>
  <title>Prototype zu MegaRaid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <p>Prototype</p> 
</div>
<!--Next projects-->
<!--Ideenfabrik-->
<!--How to solve problems-->
<!--Is it useful or not?-->
<!--Simulation of Pro & Contra-->

<!--Frage Section-->
<div class="container">
    <div class="row">
        <!--Leer-->
        <div class="col-xs-3"></div>
        <!--Frage-->
        <div class="col-xs-6">
            <h3>Frage</h3>
            <form>
                <div class="form-group">
                    <textarea class="form-control" rows="1" id="comment" placeholder="Grüne Energie"></textarea>
                </div>
            </form>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Wikipedia</button>
            <div id="demo" class="collapse">
                <font size="1">"Eine Frage ist eine Äußerung, mit der der Sprecher oder Schreiber eine Antwort zur Beseitigung 
                einer Wissens- oder Verständnislücke herausfordert (Ausnahmen: Rhetorische Frage und uneigentliche Rede). 
                Die Antwort ist ein Satz, der die Leerstelle ausfüllt, die in einer Frage stets enthalten ist. 
                Die Begriffe Frage und Antwort bilden ein Begriffspaar. Die Linguistik bestimmt Fragen als Sprechakte, 
                speziell als illokutive Akte, die Wissenstransfer bezwecken. Fragen werden in der Form von Fragesätzen 
                verschiedenen Typs geäußert. Direkte Fragen (z. B. „Wie alt sind Sie?“) enden im Deutschen stets auf ein Fragezeichen. 
                Indirekte Fragen (z. B. „Mich würde interessieren, wie alt Sie sind.“) enden dagegen nicht zwingend auf ein Fragezeichen</font>
                <a href="https://de.wikipedia.org/wiki/Frage">Wikipedia: Frage</a>
            </div>
        </div>
        <!--Frage End-->
    </div>
</div>
<!--Frage Section End-->
  
<!--Antwort Section-->
<div class="container">
    <div class="row">
        <!--Leer-->
        <div class="col-xs-3"></div>
        <!--Pro-->
        <div class="col-xs-3">
            <h3>Pro</h3>
            <p>{UP or DOWN - Vote}</p>
            <form>
                <div class="form-group">
                    <label for="comment">Titel:</label>
                    <textarea class="form-control" rows="2" id="comment" placeholder="Gekürzte u. genaue Beschreibung des Vorteils"></textarea>                    
                    <label for="comment">Antwort:</label>
                    <textarea class="form-control" rows="3" id="comment" placeholder="Vorteil ist der positive Aspekt einer Sache, ihre günstige Eigenschaft"></textarea>
                </div>
            </form>
            <p>Bitte immer mit Quellenangabe(n) angeben z.B.: </p>
            <ul>
                <li><a target="_blank" href="https://de.wikipedia.org/wiki/Vorteil">Wikipedia: Vorteil</a></li>
            </ul>
            <button type="button" class="btn btn-default">FileUpload</button>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
        <!--Pro End-->
        
        <!--Contra-->
        <div class="col-xs-3">
            <h3>Contra</h3
            <p>{UP or DOWN - Vote}</p>
            <form>
                <div class="form-group">
                    <label for="comment">Titel:</label>
                    <textarea class="form-control" rows="2" id="comment" placeholder="Gekürzte u. genaue Beschreibung des Nachteils"></textarea>   
                    <label for="comment">Antwort:</label>
                    <textarea class="form-control" rows="3" id="comment" placeholder="etwas (Umstand, Lage, Eigenschaft o.Ä.), was sich für jemanden gegenüber anderen negativ auswirkt, ihn beeinträchtigt, ihm schadet"></textarea>
                </div>
            </form>
            <p>Bitte immer mit Quellenangabe(n) angeben z.B.: </p>
            <ul>
                <li><a target="_blank" href="http://www.duden.de/rechtschreibung/Nachteil">Duden: Nachteil</a></li>
            </ul>
            <button type="button" class="btn btn-default">FileUpload</button>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
        <!--Contra End-->
    </div>
</div>
<!--Antwort Section End-->

<br>

<!--Kommentar Section-->
<div class="container">
    <div class="row">
        <!--Leer-->
        <div class="col-xs-3"></div>
        <!--Kommentar Pro-->
        <div class="col-xs-3">
            <form>
                <div class="form-group">
                    <label for="comment">Titel:</label>
                    <textarea class="form-control" rows="2" id="comment" placeholder="Gekürzte u. genaue Beschreibung des Verbesserung"></textarea> 
                    <label for="comment">Kommentar:</label>
                    <textarea class="form-control" rows="3" id="comment" placeholder="Verbesserubgsvorschlag"></textarea>
                </div>
            </form>
            <p>Bitte immer mit Quellenangabe(n) angeben z.B.: </p>
            <ul>
                <li><a target="_blank" href="https://de.wikipedia.org/wiki/Annotation">Wikipedia: Annotation</a></li>
            </ul>
            <button type="button" class="btn btn-default">FileUpload</button>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
        <!--Kommentar Pro End-->
        
        <!--Kommentar Contra-->
        <div class="col-xs-3">
            <form>
                <div class="form-group">
                    <label for="comment">Titel:</label>
                    <textarea class="form-control" rows="2" id="comment" placeholder="Gekürzte u. genaue Beschreibung des Verbesserung"></textarea> 
                    <label for="comment">Kommentar:</label>
                    <textarea class="form-control" rows="3" id="comment" placeholder="Verbesserubgsvorschlag"></textarea>
                </div>
            </form>
            <p>Bitte immer mit Quellenangabe(n) angeben z.B.:</p>
            <p>Buch, Studie, Link, Doktorarbeit, Video, </p>
            <ul>
                <li><a target="_blank" href="https://de.wikipedia.org/wiki/Annotation">Wikipedia: Annotation</a></li>
            </ul>
            <button type="button" class="btn btn-default">FileUpload</button>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
        <!--Kommentar Contra End-->
    </div>
</div>
<!--Kommentar Section End-->

<!--Info Section-->
<div class="container">
    <div class="row">
        <!--Leer-->
        <div class="col-xs-3"></div>
        <!--Info-->
        <div class="col-xs-6">
            <h4><strong>Info:</strong></h4>
            <ul>
                <li>Immer Quellenangaben hinzufügen</li>
                <li>Sachlichkeit bewahren</li>
                <li>Links aktuell halten (evtl. Inhalte speichern)</li>
                <li>Keine Offensichtlichkeiten</li>
                <li>Komplettes Video mit Zeitangabe</li>
            </ul>
        </div>
        <!--Info End-->
    </div>
</div>
<!--Info Section End-->

</body>
</html>

