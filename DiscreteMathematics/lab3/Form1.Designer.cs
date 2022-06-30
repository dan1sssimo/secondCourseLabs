
namespace Lab3
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.pictureBoxAction = new System.Windows.Forms.PictureBox();
            this.textBoxM = new System.Windows.Forms.TextBox();
            this.textBoxN = new System.Windows.Forms.TextBox();
            this.textBoxResult = new System.Windows.Forms.TextBox();
            this.labelEquals = new System.Windows.Forms.Label();
            this.comboBoxAction = new System.Windows.Forms.ComboBox();
            this.label1 = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxAction)).BeginInit();
            this.SuspendLayout();
            // 
            // pictureBoxAction
            // 
            this.pictureBoxAction.Image = global::Lab3.Properties.Resources.orderedDistribution;
            this.pictureBoxAction.Location = new System.Drawing.Point(15, 126);
            this.pictureBoxAction.Name = "pictureBoxAction";
            this.pictureBoxAction.Size = new System.Drawing.Size(45, 50);
            this.pictureBoxAction.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBoxAction.TabIndex = 0;
            this.pictureBoxAction.TabStop = false;
            // 
            // textBoxM
            // 
            this.textBoxM.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.textBoxM.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.textBoxM.Location = new System.Drawing.Point(66, 126);
            this.textBoxM.Name = "textBoxM";
            this.textBoxM.Size = new System.Drawing.Size(28, 22);
            this.textBoxM.TabIndex = 1;
            this.textBoxM.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            this.textBoxM.TextChanged += new System.EventHandler(this.textBoxM_TextChanged);
            // 
            // textBoxN
            // 
            this.textBoxN.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.textBoxN.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.textBoxN.Location = new System.Drawing.Point(66, 154);
            this.textBoxN.Name = "textBoxN";
            this.textBoxN.Size = new System.Drawing.Size(28, 22);
            this.textBoxN.TabIndex = 2;
            this.textBoxN.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            this.textBoxN.TextChanged += new System.EventHandler(this.textBoxM_TextChanged);
            // 
            // textBoxResult
            // 
            this.textBoxResult.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.textBoxResult.Enabled = false;
            this.textBoxResult.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.textBoxResult.Location = new System.Drawing.Point(127, 140);
            this.textBoxResult.Name = "textBoxResult";
            this.textBoxResult.Size = new System.Drawing.Size(237, 22);
            this.textBoxResult.TabIndex = 3;
            // 
            // labelEquals
            // 
            this.labelEquals.AutoSize = true;
            this.labelEquals.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.labelEquals.Location = new System.Drawing.Point(100, 140);
            this.labelEquals.Name = "labelEquals";
            this.labelEquals.Size = new System.Drawing.Size(21, 21);
            this.labelEquals.TabIndex = 4;
            this.labelEquals.Text = "=";
            // 
            // comboBoxAction
            // 
            this.comboBoxAction.FormattingEnabled = true;
            this.comboBoxAction.Location = new System.Drawing.Point(231, 43);
            this.comboBoxAction.Name = "comboBoxAction";
            this.comboBoxAction.Size = new System.Drawing.Size(121, 23);
            this.comboBoxAction.TabIndex = 5;
            this.comboBoxAction.SelectedIndexChanged += new System.EventHandler(this.comboBoxAction_SelectedIndexChanged);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Segoe UI Emoji", 15.75F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point);
            this.label1.Location = new System.Drawing.Point(245, 12);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(88, 28);
            this.label1.TabIndex = 6;
            this.label1.Text = "Меню:";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ControlLight;
            this.ClientSize = new System.Drawing.Size(633, 328);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.comboBoxAction);
            this.Controls.Add(this.labelEquals);
            this.Controls.Add(this.textBoxResult);
            this.Controls.Add(this.textBoxN);
            this.Controls.Add(this.textBoxM);
            this.Controls.Add(this.pictureBoxAction);
            this.ForeColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.Name = "Form1";
            this.Text = "Лабораторна №3. Завдання №2. Савченко Д.П. ІПЗ-20-4(2)";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.FormLab3_FormClosed);
            this.Load += new System.EventHandler(this.FormLab3_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxAction)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.PictureBox pictureBoxAction;
        private System.Windows.Forms.TextBox textBoxM;
        private System.Windows.Forms.TextBox textBoxN;
        private System.Windows.Forms.TextBox textBoxResult;
        private System.Windows.Forms.Label labelEquals;
        private System.Windows.Forms.ComboBox comboBoxAction;
        private System.Windows.Forms.Label label1;
    }
}