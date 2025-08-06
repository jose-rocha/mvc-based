<h1>Entre em Contato</h1>

<div style="margin: 2rem 0;">
    <p>Tem alguma dúvida ou sugestão? Envie-nos uma mensagem!</p>
    <p>Responderemos o mais breve possível.</p>
</div>

<form style="max-width: 600px;">
    <div style="margin-bottom: 1rem;">
        <label for="nome" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Nome completo:</label>
        <input type="text" id="nome" name="nome" required 
               style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;">
    </div>
    
    <div style="margin-bottom: 1rem;">
        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Email:</label>
        <input type="email" id="email" name="email" required 
               style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;">
    </div>
    
    <div style="margin-bottom: 1rem;">
        <label for="assunto" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Assunto:</label>
        <select id="assunto" name="assunto" required 
                style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;">
            <option value="">Selecione um assunto</option>
            <option value="duvida">Dúvida técnica</option>
            <option value="sugestao">Sugestão</option>
            <option value="problema">Relatar problema</option>
            <option value="outros">Outros</option>
        </select>
    </div>
    
    <div style="margin-bottom: 1.5rem;">
        <label for="mensagem" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required rows="6"
                  style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; resize: vertical;"
                  placeholder="Digite sua mensagem aqui..."></textarea>
    </div>
    
    <button type="submit" 
            style="background: #007bff; color: white; padding: 0.75rem 2rem; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer; transition: background 0.3s ease;">
        📧 Enviar Mensagem
    </button>
</form>

<div style="margin-top: 3rem; padding: 1.5rem; background: #e9ecef; border-radius: 8px;">
    <h3>Outras formas de contato</h3>
    <div style="margin-top: 1rem;">
        <p>📧 <strong>Email:</strong> contato@mvcapp.com</p>
        <p>📱 <strong>Telefone:</strong> (11) 9999-9999</p>
        <p>🕒 <strong>Horário:</strong> Segunda a Sexta, 8h às 18h</p>
    </div>
</div>