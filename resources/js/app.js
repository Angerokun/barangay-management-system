// import './bootstrap';
import { fabric } from "fabric";
import Ruler from "@scena/ruler";

initializeFabricJS(1000, 1000);
//setUpRulers();
var canvass;

function initializeFabricJS(width, height)
{
    canvass = new fabric.Canvas(document.querySelector('#canvas_container'), {
            width: width,
            height: height,
            zoom: 1,
            selection: false
        });
        canvass.on({
            'selection:created': selectCanvasObject(),
            'selection:updated': selectCanvasObject(),
            'selection:cleared': clearedCanvasSelection(),
            'text:changed': textChanged(),
            'object:modified': updateObjectProperty(),
            'object:scaling' : changeScale(),
        });
}

document.getElementById("full_name").onclick = function() {createText('full_name')};
function createText(id
) {
    var text = new fabric.Textbox("text", {
        id: id,
        left: 0,
        top: 0,
        textTransform: 'capitalize',
        width: 200,
        height:34,
        fontSize: 12,
        fontWeight: 50,
        fontFamily: '',
        fill: 'black',
        charSpacing: 20,
        paintFirst: 'stroke',
        lockScalingFlip: true,
        selectionBackgroundColor: "rgba(255, 255, 255, 0.7)",
        editable: true,
        splitByGrapheme: true,
        fixedWidth: 200,
        fixedHeight: 34
    });

    canvass.add(text); 
    canvass.renderAll();
}

function selectCanvasObject() {
    //
}

function clearedCanvasSelection() {
    //
}

function textChanged() {
    //
}

function updateObjectProperty() {
    //
}

function changeScale() {
    //
}



function setUpRulers() {
    const ruler1 = new Ruler(document.querySelector(".ruler.horizontal"), {
        type: "horizontal",
        backgroundColor:'white',
        textColor: 'black',
        direction: "start",
        unit: 100
    });
    const ruler2 = new Ruler(document.querySelector(".ruler.vertical"), {
        type: "vertical",
        backgroundColor:'white',
        textColor: 'black',
        direction: "start",
        unit: 100
    });

    window.addEventListener("resize", () => {
        ruler1.resize();
        ruler2.resize();
    });
}