from flask import Flask, render_template, request
import language_tool_python

app = Flask(__name__)
tool = language_tool_python.LanguageTool('pt-BR')

@app.route("/", methods=["GET", "POST"])
def index():
    mensagem = ""
    erros = []

    if request.method == "POST":
        texto = request.form.get("texto")
        mensagem = f"Você escreveu: {texto}"

        matches = tool.check(texto)
       
            
        for match in matches:
            erro = texto[match.offset : match.offset + match.errorLength]
            sugestao = ", ".join(match.replacements)
            if "poha" in texto:
               erros.append(f"Erro: '{erro}' → Sugestões: {sugestao} e sem palavrao")
            else:
                erros.append(f"Erro: '{erro}' → Sugestões: {sugestao} ")
           


    return render_template("index.html", mensagem=mensagem, erros=erros)

if __name__ == "__main__":
    app.run(debug=True)



