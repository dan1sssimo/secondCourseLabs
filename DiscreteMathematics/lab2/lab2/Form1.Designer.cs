namespace lab2
{
    partial class Form1
    {
        /// <summary>
        /// Обязательная переменная конструктора.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Освободить все используемые ресурсы.
        /// </summary>
        /// <param name="disposing">истинно, если управляемый ресурс должен быть удален; иначе ложно.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Код, автоматически созданный конструктором форм Windows

        /// <summary>
        /// Требуемый метод для поддержки конструктора — не изменяйте 
        /// содержимое этого метода с помощью редактора кода.
        /// </summary>
        private void InitializeComponent()
        {
            this.dataGridViewSetsRelations = new System.Windows.Forms.DataGridView();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.textBoxA = new System.Windows.Forms.TextBox();
            this.textBoxB = new System.Windows.Forms.TextBox();
            this.button1 = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridViewSetsRelations)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridViewSetsRelations
            // 
            this.dataGridViewSetsRelations.BackgroundColor = System.Drawing.SystemColors.ButtonHighlight;
            this.dataGridViewSetsRelations.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridViewSetsRelations.Location = new System.Drawing.Point(39, 12);
            this.dataGridViewSetsRelations.Name = "dataGridViewSetsRelations";
            this.dataGridViewSetsRelations.Size = new System.Drawing.Size(697, 302);
            this.dataGridViewSetsRelations.TabIndex = 0;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Viner Hand ITC", 27.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(214, 356);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(128, 60);
            this.label1.TabIndex = 1;
            this.label1.Text = "A = {";
            this.label1.Click += new System.EventHandler(this.label1_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Viner Hand ITC", 27.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(217, 416);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(127, 60);
            this.label2.TabIndex = 2;
            this.label2.Text = "B = {";
            this.label2.Click += new System.EventHandler(this.label2_Click);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Viner Hand ITC", 27.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(492, 356);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(46, 60);
            this.label3.TabIndex = 3;
            this.label3.Text = "}";
            this.label3.Click += new System.EventHandler(this.label3_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Viner Hand ITC", 27.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(492, 416);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(46, 60);
            this.label4.TabIndex = 4;
            this.label4.Text = "}";
            this.label4.Click += new System.EventHandler(this.label4_Click);
            // 
            // textBoxA
            // 
            this.textBoxA.Font = new System.Drawing.Font("Times New Roman", 27.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.textBoxA.Location = new System.Drawing.Point(331, 356);
            this.textBoxA.Name = "textBoxA";
            this.textBoxA.Size = new System.Drawing.Size(155, 50);
            this.textBoxA.TabIndex = 5;
            this.textBoxA.TextChanged += new System.EventHandler(this.textBoxA_TextChanged);
            // 
            // textBoxB
            // 
            this.textBoxB.Font = new System.Drawing.Font("Times New Roman", 27.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.textBoxB.Location = new System.Drawing.Point(331, 419);
            this.textBoxB.Name = "textBoxB";
            this.textBoxB.Size = new System.Drawing.Size(155, 50);
            this.textBoxB.TabIndex = 6;
            this.textBoxB.TextChanged += new System.EventHandler(this.textBoxB_TextChanged);
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.SystemColors.MenuHighlight;
            this.button1.Font = new System.Drawing.Font("Viner Hand ITC", 24F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button1.Location = new System.Drawing.Point(224, 474);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(300, 53);
            this.button1.TabIndex = 7;
            this.button1.Text = "Обрахувати";
            this.button1.UseVisualStyleBackColor = false;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.Info;
            this.ClientSize = new System.Drawing.Size(769, 537);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.textBoxB);
            this.Controls.Add(this.textBoxA);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dataGridViewSetsRelations);
            this.Name = "Form1";
            this.Text = "Лабораторна робота №2. Завдання №2.";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridViewSetsRelations)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridViewSetsRelations;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.TextBox textBoxA;
        private System.Windows.Forms.TextBox textBoxB;
        private System.Windows.Forms.Button button1;
    }
}

