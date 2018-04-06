function changeMode() {
    var selected = document.getElementById("language").value;
    switch (selected) {
        case "java":

            editor.toTextArea();
            editor = CodeMirror.fromTextArea(editor.getTextArea(), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "text/x-java"
            });
            editor.getDoc().setValue("public class main {\n" +
                " \n" +
                "\tpublic static void main(String[] args) {\t\t\n" +
                "\t\tSystem.out.println(\"Hola Mundo\");\n" +
                "\t}\n" +
                " \n" +
                "}");
            break;

        case "c":
            editor.toTextArea();
            editor = CodeMirror.fromTextArea(editor.getTextArea(), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "text/x-csrc"

            });
            editor.getDoc().setValue('#include <stdio.h>\n' +
                '\n' +
                'int main()\n' +
                '{\n' +
                '        printf("Hola mundo");\n' +
                '        return 0;\n' +
                '}');
            break;
                case "javaSinClases":
                    editor.toTextArea();
                    editor = CodeMirror.fromTextArea(editor.getTextArea(), {
                        lineNumbers: true,
                        matchBrackets: true,
                        mode: "text/x-java"

                    });
                    editor.getDoc().setValue("System.out.println(\"Hola mundo\");");
                break;

    }
}