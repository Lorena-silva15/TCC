import language_tool_python
import sqlalchemy.orm
from flask import Flask, render_template, request
from sqlalchemy import create_engine, Column, String, Integer, Boolean, ForeignKey

from sqlalchemy.orm import sessionmaker, declarative_base 
 

app = Flask(__name__)
tool = language_tool_python.LanguageTool('pt-BR')


# db= create_engine("sqlite:///banco.db")
# Session= sessionmaker(bind=db)
# session=Session()

# Base= declarative_base()



# class Usuario(Base):

#     id = Column("id", Integer, primary_key=True, autoincrement=True)
#     nome= Column("nome", String)
#     email=Column("email", String)
#     senha=Column("senha", String)

#     def __init__(self,nome, email ,senha):
#         self.nome=nome
#         self.email=email
#         self.senha=senha

# Base.metadata.create_all(bind=db)

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


