<html>
	<head>
		<title>Online Compiler for Off-Campus Students</title>
        <script src="./codemirror-5.35.0/lib/codemirror.js"></script>
        <link rel="stylesheet" href="./codemirror-5.35.0/lib/codemirror.css">
        <link rel="stylesheet" href="./codemirror-5.35.0/addon/hint/show-hint.css">
        <script src="./codemirror-5.35.0/mode/clike/clike.js"></script>
        <script src="modeManager.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <!--<script src="./codemirror-5.35.0/addon/hint/show-hint.js"></script>-->
	</head>

	<body>
    <script src="js/ajaxCompile.js"></script>
	<div id="whole">
		<div id="content">
			<div class="code">
				<td class="code">	
				<form method="post" id="form" >
					Select Language of Interest:
						<select name="language" id="language" onChange="changeMode()">
							<option value="c">C</option>
                            <option value="java">Java con clases</option>
							<!--<option value="glib">Graphics</option>
							<option value="nvcc">NVCC</option>
							<option value="cpp">C++</option>

                            <option value="javaSinClases">Java sin clases</option>-->
						</select>

					<br />
					<strong>Enter Your code here:<br/></strong>
					<textarea name="code" rows=15 cols=100  id="code"></textarea><br/>
					<span id="errorCode" class="error"></span><br/><br/>
					<strong>Sample Input please:<br/></strong>
					<textarea name="input" rows=7 cols=100 id="input"></textarea><br/><br/>

                    <script>
                        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
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
                    </script>
                    <button id="submit">Submit</button>
					<input type="reset" value="Reset"><br/>
				</form>
				</td>
                <div id="output"></div>
		</div>

	</div>
	
	</body>
</html>
